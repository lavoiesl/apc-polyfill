# APC Polyfill

[![Build Status](https://travis-ci.org/lavoiesl/apc-polyfill.svg?branch=master)](https://travis-ci.org/lavoiesl/apc-polyfill)

In rare cases, APCu would not be providing APC functions, this is a simple wrapper to provide it.

## Usage

```php
<?php
use Lavoiesl\APCPolyfill\APCPolyfill;

APCPolyfill::createAliases();
?>
```