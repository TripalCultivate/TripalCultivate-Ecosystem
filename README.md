# Tripal Cultivate: Ecosystem

**Developed by the University of Saskatchewan, Pulse Crop Bioinformatics team.**

<!-- Summarize the main features of this package in point form below. -->

- Provides content types and fields focused on ecosystem surveys, microbiomes, and sample collection.

## Citation

If you use this module in your Tripal site, please use this citation to reference our work any place where you described your resulting Tripal site. For example, if you publish your site in a journal then this citation should be in the reference section and anywhere functionality provided by this module is discussed in the above text should reference it.

> Sanderson LA (2024). TripalCultivate Ecosystem: get the complete picture. Development Version. University of Saskatchewan, Pulse Crop Research Group, Saskatoon, SK, Canada.


## Technology Stack

*See specific version compatibility in the automated testing section below.*

- Drupal
- Tripal 4.x
- TripalCultivate Base
- PostgreSQL
- PHP
- Apache2

### Automated Testing

This package is dedicated to a high standard of automated testing. We use
PHPUnit for testing and QtlyCloud to ensure good test coverage and maintainability.

![MaintainabilityBadge]
![TestCoverageBadge]

The following compatibility is proven via automated testing workflows.


| PHP\Drupal | 10.6.x              | 11.3.x              | 11.4.x              |
|------------|---------------------|---------------------|---------------------|
| **PHP8.2** | ![Grid82-106-Badge] |                     |                     |
| **PHP8.3** | ![Grid83-106-Badge] | ![Grid83-113-Badge] | ![Grid83-114-Badge] |
| **PHP8.4** | ![Grid84-106-Badge] | ![Grid84-113-Badge] | ![Grid84-114-Badge] |
| **PHP8.5** |                     | ![Grid85-113-Badge] | ![Grid85-114-Badge] |


[Grid82-106-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.2_D10_6x.yml/badge.svg
[Grid83-106-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.3_D10_6x.yml/badge.svg
[Grid83-113-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.3_D11_3x.yml/badge.svg
[Grid83-114-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.3_D11_4x.yml/badge.svg
[Grid84-106-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.4_D10_6x.yml/badge.svg
[Grid84-113-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.4_D11_3x.yml/badge.svg
[Grid84-114-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.4_D11_4x.yml/badge.svg
[Grid85-113-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.5_D11_3x.yml/badge.svg
[Grid85-114-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-php8.5_D11_4x.yml/badge.svg

[MaintainabilityBadge]: https://qlty.sh/gh/TripalCultivate/projects/TripalCultivate-Ecosystem/maintainability.svg
[TestCoverageBadge]: https://qlty.sh/gh/TripalCultivate/projects/TripalCultivate-Ecosystem/coverage.svg
