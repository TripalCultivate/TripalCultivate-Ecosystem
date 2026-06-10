ARG drupalversion='11.x-dev'
ARG phpversion='8.5'
ARG postgresqlversion='18'
ARG buildplatform='linux/amd64'
FROM --platform=${buildplatform} knowpulse/tripalcultivate-base:drupal${drupalversion}-php${phpversion}-pgsql${postgresqlversion}

COPY . /var/www/drupal/web/modules/contrib/TripalCultivate-Ecosystem
WORKDIR /var/www/drupal/web/modules/contrib/TripalCultivate-Ecosystem

RUN rm ./phpunit.xml \
  && bash /var/www/drupal/web/modules/contrib/tripal/set_phpunit_config.sh \
  && cp /var/www/drupal/web/modules/contrib/TripalCultivate/.codingstandards.xml ./phpcs.xml

RUN service postgresql restart \
  && drush en trpcultivate_ecosystem --yes \
  && drush tripal:trp-run-jobs --username=drupaladmin \
  && drush cr
