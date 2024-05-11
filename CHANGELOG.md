# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 🔥 v1.0.0-alpha.2 [2024-05-11]

### New:
* Added favicon.ico to public directory
* Added PHP version to welcome view
* Added HTTPS and www redirect examples to .htaccess

### Changed:
* Set `null` as default cookie domain configuration

## 🔥 v1.0.0-alpha.1 [2024-05-06]

### New:
* Initial commit
* Added WelcomeController
* Added ExceptionHandler
* Added LICENSE.md
* Added .env.dist
* Added storage directory
* Added public directory
* Added bin directory
* Added README.md
* Added `post-root-package-install` and `post-create-project-cmd` commands to composer.json
* Added app.yaml configuration file

### Changed:
* Added `view` method to ExceptionHandler::renderHtmlView
* File structure adapted to new framework conditions
* Updated zaphyr-org/framework to v1.0.0.alpha.1 and phpunit/phpunit to v10.5.20
* Updated README.md

### Fixed:
* Changed path from `app` to `src` in phpstan.neon
* Added HTTP status code for error views to response
