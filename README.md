<!-- PROJECT SHIELDS -->
[![Twitter Follow](https://img.shields.io/twitter/follow/SwitchcatA?style=social)](https://twitter.com/SwitchcatA)
[![Issues](https://img.shields.io/github/issues/SwitchCat/framework.svg?style=flat-square)](https://github.com/SwitchCat/framework/issues)
![GitHub All Releases](https://img.shields.io/github/downloads/SwitchCat/framework/total?logo=GitHub)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://switchcat.agency">
    <img src="assets/vendor/media/SwitchCat/switchcat-agency-card-medium.png" alt="Logo" width="640">
  </a>
  <h3 align="center"><img src="https://img.shields.io/static/v1?label=SwitchCat&message=Framework&color=ff7701&style=for-the-badge" /></h3>
  <h4 align="center">This project is still under construction, don't try to use it yet.</h4>    
</p>
<p align="center">
    <br />
    <br />
    The SwitchCat framework is a full-stack framework purposed to create websites and app's in a time effective way.
    <br />
    <br />
</p>
<p align="center">
    <strong>
    <a href="https://github.com/SwitchCat/framework/archive/switchcat.zip">Download</a>
    ·
    <a href="https://switchcat.agency/assets/documents/switchcatframework.pdf" download>Documentation</a>
    ·
    <a href="https://github.com/SwitchCat/framework/wiki">Wiki</a>
    ·
    <a href="https://github.com/SwitchCat/framework/issues">Report Bug</a>
    ·
    <a href="https://github.com/SwitchCat/framework/issues">Request Feature</a>
    </strong>  
</p>

<!-- TABLE OF CONTENTS -->
## Table of Contents

* [About the Project](#about-the-project)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Dependencies](#dependencies)
  * [Installation](#installation)
* [Usage](#usage)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [License](#license)
* [Contact](#contact)
* [Acknowledgements](#acknowledgements)

<!-- ABOUT THE PROJECT -->
## About The Project

This framework has been created in order to facilitate and seed-up the process of web-site creation. It respects the MVC design pattern and has an open architecture in order to be able to integrate any third party library without adaptation. It uses the command line interface to generate the model layer from the database tables. Once set-up, one has only to worry about the business logic.

<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

<!-- PREREQUISITES -->
### Prerequisites

* PHP7.4+
* PHP extensions: ext-json, ext-pdo, ext-intl, ext-pcre, ext-redis, ext-ctype, ext-filter, ext-hash, ext-dom
* [Composer](https://getcomposer.org/)

<!-- DEPENDENCIES -->
### Dependencies

<img height="64" width="64" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/350px-Webysther_20160423_-_Elephpant.svg.png" alt="php"/><img height="64" width="64" src="https://simpleicons.org/icons/composer.svg" alt="composer"/><img height="64" src="https://pluspng.com/img-png/jquery-logo-png-many-people-see-ajax-as-the-technology-that-saved-the-web-that-made-it-possible-to-create-much-richer-web-2-0-applications-than-was-ever-possible-using-1256.png" alt="jquery" /><img height="64" src="https://w3b.fr/sites/default/files/bootstrap02.png" alt="bootstrap" /><img height="64" src="https://symfony.com/images/logos/header-logo.svg" alt="symfony" /><img height="64" src="https://www.homehost.com.br/blog/wp-content/uploads/2016/06/phpmailer-logo-300x292.jpg" alt="phpmailer" />

<img src="https://img.shields.io/static/v1?label=SwitchCat&message=Framework&color=orange" /> depends on several third-party libraries. These will automatically be downloaded when you install the framework with composer.

* [symfony/http-foundation](https://symfony.com/doc/current/components/http_foundation.html)
* [symfony/var-dumper](https://github.com/symfony/var-dumper)
* [league/climate](https://github.com/thephpleague/climate)
* [arcanedev/seo-helper](https://github.com/ARCANEDEV/SEO-Helper)
* [phpmailer/phpmailer](https://github.com/PHPMailer/PHPMailer)
* [matthiasmullie/minify](https://www.minifier.org/)
* [voku/html-min](https://github.com/voku/HtmlMin)
* [voku/portable-utf8](https://github.com/voku/portable-utf8)
* [maximebf/debugbar](https://github.com/maximebf/php-debugbar)
* [mnsami/composer-custom-directory-installer](https://github.com/mnsami/composer-custom-directory-installer)

<!-- INSTALLATION -->
### Installation

1. Use composer from the root of your server to download the project skeleton.
```sh
composer create-project switchcat/framework <your project name>
```
2. Create the .ini file for your new project and follow the steps.
```sh
php switchcat -f init
```
3. Eventualy you can also download a ready made template. These templates are listed [here](#templates).
```sh
composer require switchcat/tpl_<template name>
php switchcat -f template -r <template name>
```

<!-- USAGE EXAMPLES -->
## Usage

* Create a model

After having created your table int the database, use the command lind to generate the corresponding model layer

```sh
php switchcat -f model
```

* Create a controller

For each use-case, a new controller is required. The appropriate skelleton can be generated this way:

```sh
php switchcat -f control
```

* Add a module

The frameworks comes with the minimal installation modules. Additional modules con be installed this way:

```sh
php switchcat -f module -r [module name]
```
[List of the SwitchCat Framework Modules](#modules)

_For examples, please refer to the [Documentation](https://switchcat.agency/assets/documents/switchcatframework.pdf)_

<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/SwitchCat/framework/issues) for a list of proposed features (and known issues).

<!-- MODULES -->
## Modules

### Ekwivalent [ [switchcat\ekwivalent](https://github.com/SwitchCat/ekwivalent/blob/switchcat/README.md) ]

Provide your app with multilingual capacity. Each piece of text string will be recognized with a unique identifier and translation lists for each language will allow the app to display it's content with an equivalent content in the desired language. The idea behind this module is that no translation system, as good as it can be, will be able to correctly translate the idea behind a text. Only a human thought translation can achieve this. With this module it is up to the developer to provide equivalent translations to the app.

Installation:

```sh
php switchcat -f module -r switchcat\ekwivalent
```

### Logreg [ [switchcat\logreg](https://github.com/SwitchCat/logreg/blob/switchcat/README.md) ]

Provide your app with login and register functionalities.

Installation:

```sh
php switchcat -f module -r switchcat\logreg
```

<!-- TEMPLATES -->
## Templates

Most of the templates we adapt to the SwitchCat framework are free templates coming from sites like [startbootstrap.com](https://startbootstrap.com), [bootstrapemade.com](https://bootstrapmade.com/) and others. Please respect the author rights attached to them.

### [Bizland](https://bootstrapmade.com/demo/BizLand/)

```sh
composer require switchcat/tpl_bizland
php switchcat -f template -r bizland
```

BizLand is a multi purpose modern and creative corporate and agency website template. It’s created with latest version of Bootstrap framework and all modern technologies like HTML5, CSS3. The amazing and professional BizLand bootstrap template can be used for your corporate and financial businesses, agencies, startups, companies, brands, online service providers and many more.

BizLand comes with a clean, modern and stunning design that will help you attract your website visitors and keep them engaged. BizLand will allow you to showcase your works and services in an impressive way. All the elements of this template are fully responsive and work smoothly on all devices and screen sizes.

BizLand bootstrap template is easy to customize, clean and structured source code, 100% responsive and supports all modern browsers and devices.

Key Features:

    Light, clean and modern design
    Latest Bootstrap version
    Clean code and easy to customize
    Off-canvas mobile menu
    Testimonials carousel
    Portfolio with lightbox support
    Portfolio details page template
    Inner page template
    Responsive Layout
    Pricing Section
    Animation on scroll effects
    Testimonials Section
    Frequently Asked Question Section
    Smooth Scroll
    SEO Optimized
    Cross Browser compatible

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

<a href="https://switchcat.agency" ><img src="https://img.shields.io/static/v1?label=SwitchCat&message=Agency&color=ff7701&style=for-the-badge" /></a>

<!-- ACKNOWLEDGEMENTS -->
