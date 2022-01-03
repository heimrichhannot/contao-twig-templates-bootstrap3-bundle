# Changelog

## [Unreleased] - 2022-01-03
- Changed: inputGroupClass in form_row can now be set as widget attribute (e.g. from dca oder getAttributesFromDca hook)

## [1.0.1] - 2021-08-13
Same as 1.0.0

## [1.0.0] - 2021-08-13 [YANKED]
- Changed: renamed bundle class from `ContaoTwigTemplatesBootstrap3Bundle` to `HeimrichHannotTwigTemplatesBootstrap3Bundle`
- Changed: renamed bundle namespace from `HeimrichHannot\ContaoTwigTemplatesBootstrap3Bundle` to `HeimrichHannot\TwigTemplatesBootstrap3Bundle`
- Changed: minimum twig templates bundle version raised to 2.0
- Changed: Updated translations
- Removed: .html5 proxy templates
- Fixed: multiple selects not working

## [0.3.2] - 2020-09-15
- updated form_row template to extend from @ContaoTwigTemplates/forms/form_row.html.twig
- fixed support for formhybrid subpalettes
- added error block to form_password_bs3

## [0.3.1] - 2020-08-19
- fixed <php7.4 compatibility issues

## [0.3.0] - 2020-08-03
- updated Bootstrap3Framework to implement FrontendFrameworkInterface 
- bump minimum twig template bundle version to 1.4
- added member_default_bs3 template
- changed screenreader css class from invisible to sr-only (bootstrap 3 default)

## [0.2.1] - 2020-07-30
- added missing mod_login_bs3.html5 template

## [0.2.0] - 2019-07-30
- added mod_login_bs3 template
- increased min twig templates bundle version to 1.2

## [0.1.2] - 2019-08-08

- fixed search template

## [0.1.1] - 2019-07-11

- updated dependencies

## [0.1.0] - 2019-04-08

Initial release