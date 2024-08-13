# Secure Spreadsheet

🔥 Secure your data exports - encrypt and password protect sensitive XLSX files

The [Office Open XML format](https://en.wikipedia.org/wiki/Office_Open_XML) provides a standard for encryption and password protection. Works with Excel, Numbers, and LibreOffice Calc.

[![PHPUnit](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/actions/workflows/test-phpunit.yml/badge.svg)](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/actions/workflows/test-phpunit.yml)
[![PHPStan](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/actions/workflows/test-phpstan.yml/badge.svg)](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/actions/workflows/test-phpstan.yml)
[![Coverage Status](https://coveralls.io/repos/github/PHPDevsr/PHPSpreadsheet-Secure/badge.svg?branch=develop)](https://coveralls.io/github/PHPDevsr/PHPSpreadsheet-Secure?branch=develop)
[![Downloads](https://poser.pugx.org/phpdevsr/phpspreadsheet-secure/downloads)](https://packagist.org/packages/phpdevsr/phpspreadsheet-secure)
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/PHPDevsr/PHPSpreadsheet-Secure)](https://packagist.org/packages/phpdevsr/phpspreadsheet-secure)
[![GitHub stars](https://img.shields.io/github/stars/PHPDevsr/PHPSpreadsheet-Secure)](https://packagist.org/packages/phpdevsr/phpspreadsheet-secure)
[![GitHub license](https://img.shields.io/github/license/PHPDevsr/PHPSpreadsheet-Secure)](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/blob/develop/LICENSE)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/pulls)

## Installation

To install the package:

Run ``composer require phpdevsr/phpspreadsheet-secure`` to add the package to your project.

This will automatically install the package to your vendor folder.

## Usage

```php
require "vendor/autoload.php";

use PHPDevsr\Spreadsheet\Secure;

$test = new Secure();
$test->setFile('Book1.xlsx')
    ->setPassword('111')
    ->output('bb.xlsx');
```

## Contributing

We **are** accepting contributions from the community! It doesn't matter whether you can code, write documentation, or help find bugs, all contributions are welcome.

Please read the [*Contributing to PHPDevsr*](https://github.com/PHPDevsr/PHPSpreadsheet-Secure/blob/develop/contributing/README.md).

This repository has had thousands on contributions from people since its creation. This project would not be what it is without them.

<a href="https://github.com/PHPDevsr/PHPSpreadsheet-Secure/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=PHPDevsr/PHPSpreadsheet-Secure" />
</a>

Made with [contrib.rocks](https://contrib.rocks).
