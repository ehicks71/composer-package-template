# Compose Package Template

Template repository for use in creating new repositories that need Composer, PHPUnt and Code Climate support.

## Usage

Once you use this template to create a new repository you'll need to tweak a few things in the composer.json.

In composer.json

  * Change the package name and description.

```
    "name": "[your-project]/[your-package]",
    "description": "[Your package description.]",
```

  * Change the namespace

```
    "autoload": {
        "psr-4": {
            "Your\\Namespace\\Template\\": "src/"
        }
    },
```

## Composer Installation / Setup

Composer is a dependency manager for PHP.  For installation and usage instructions, refer to https://getcomposer.org.

## PHPUnit Installation / Setup

PHPUnit is a unit testing framework built for PHP.  For more information, visit https://phpunit.de.

### Installation

To install PHPUnit you will need to run this command:

```
composer update
```

### Usage

Once PHPUnit is installed by Composer you can run this command to run the tests.

```
vendor/bin/phpunit
```

## Code Climate Setup

Code Climate is a Github plugin that tests the quality of code.  The initial setup in this repository covers basic code standards and adds PSR standards to check for PHP.

For more information about Code Climate, visit https://codeclimate.com.
