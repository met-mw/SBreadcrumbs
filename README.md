[![Build Status](https://travis-ci.org/met-mw/SBreadcrumbs.svg?branch=master)](https://travis-ci.org/met-mw/SBreadcrumbs)
[![Coverage Status](https://coveralls.io/repos/github/met-mw/SBreadcrumbs/badge.svg?branch=master)](https://coveralls.io/github/met-mw/SBreadcrumbs?branch=master)
[![Latest Stable Version](https://poser.pugx.org/met_mw/sbreadcrumbs/v/stable)](https://packagist.org/packages/met_mw/sbreadcrumbs)
[![Latest Unstable Version](https://poser.pugx.org/met_mw/sbreadcrumbs/v/unstable)](https://packagist.org/packages/met_mw/sbreadcrumbs)
[![Total Downloads](https://poser.pugx.org/met_mw/sbreadcrumbs/downloads)](https://packagist.org/packages/met_mw/sbreadcrumbs)
[![License](https://poser.pugx.org/met_mw/sbreadcrumbs/license)](https://packagist.org/packages/met_mw/sbreadcrumbs)
# SBreadcrumbs
Simple breadcrumbs for web-applications.

## Install
```
composer require met_mw/sbreadcrumbs
```

## example
```
$breadcrumbs = new Breadcrumbs();
$breadcrumbs->addBreadcrumb('First page', '?page=1')
    ->addBreadcrumb('Second page', '?page=2')
    ->addBreadcrumb('Third page')
    ->render();
```

## License
The met-mw/SBreadcrumbs package is open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**