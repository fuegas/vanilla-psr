# Vanilla PSR

A modified ruleset for Code Style checks.
It is based on PSR-2 but allows to indent with 2 spaces instead of 4.

# Known issues:

None for now. When you find an issue, please [create an issue](https://github.com/fuegas/vanilla-psr/issues/new).

# Usage:

You can reference the library

## Composer

Vanilla-psr can be installed using using [composer](http://getcomposer.org/). Simply add `fuegas/vanilla-psr` to your composer.json file.

````javascript
{
    "require": {
        "fuegas/vanilla-psr": "*"
    }
}
````

## PHPCS

You can use the ruleset with the command ``.

If you only want to type `phpcs` you can create the file `phpcs.xml` in the root of your project with contents like this:

````xml
<?xml version="1.0"?>
<ruleset name="Vanilla PSR">
  <description>Coding standard using vanilla PSR.</description>

  <file>src/FileToTest.php</file>
  <file>tests/*.php</file>
  <file>tests/**/*.php</file>

  <rule ref="<dir_to_ruleset>/vanilla-psr/ruleset.xml"/>
</ruleset>
````

If you want to use the standard from cli you can use the following command:

```
vendor/bin/phpcs \
  --standard=vanilla-psr \
  --runtime-set installed_paths vendor/fuegas/vanilla-psr \
  tests
```

## Grunt

If you use Grunt to automate the check of coding style standards, the following option can be set to use vanilla-psr (assuming you installed vanilla-psr using composer):

````javascript
phpcs: {
  options: {
    standard: './vendor/fuegas/vanilla-psr/vanilla-psr/ruleset.xml',
  }
}
````

# Changelog

## Next
 - Fix standard paths so they can be detected and included

## 1.1

 - FIX multiline declarations of methods and switches, 2 spaces indenting can be used
 - FIX multiline call, 2 spaces indenting can be used

## 1.0

 - Base ruleset on PSR-2
  - Allow indenting of 2 spaces instead of 4
