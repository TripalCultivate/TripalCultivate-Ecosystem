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
PHPUnit for testing and CodeClimate to ensure good test coverage and maintainability.
There are more details on [our CodeClimate project page] describing our specific
maintainability issues and test coverage.

![MaintainabilityBadge]
![TestCoverageBadge]

The following compatibility is proven via automated testing workflows.

|  Drupal     |  10.0.x         |  10.1.x         |  10.2.x         |
|-------------|-----------------|-----------------|-----------------|
| **PHP 8.1** | ![Grid1A-Badge] | ![Grid1B-Badge] | ![Grid1C-Badge] |
| **PHP 8.2** | ![Grid2A-Badge] | ![Grid2B-Badge] | ![Grid2C-Badge] |
| **PHP 8.3** |                 |                 | ![Grid3C-Badge] |

[our CodeClimate project page]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem
[MaintainabilityBadge]: https://api.codeclimate.com/v1/badges/5d139ad7af5a3e2564ab/maintainability
[TestCoverageBadge]: https://api.codeclimate.com/v1/badges/5d139ad7af5a3e2564ab/test_coverage

[Grid1A-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid1A.yml/badge.svg
[Grid1B-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid1B.yml/badge.svg
[Grid1C-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid1C.yml/badge.svg

[Grid2A-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid2A.yml/badge.svg
[Grid2B-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid2B.yml/badge.svg
[Grid2C-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid2C.yml/badge.svg

[Grid3C-Badge]: https://github.com/TripalCultivate/TripalCultivate-Ecosystem/actions/workflows/MAIN-phpunit-Grid3C.yml/badge.svg
