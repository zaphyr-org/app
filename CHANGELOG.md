# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 🔥 [v1.0.0-alpha.6](https://github.com/zaphyr-org/app/compare/1.0.0-alpha.5...1.0.0-alpha.6) [2025-06-10]

### New:

* Added `zaphyr-org/plugin-installer` to allowed composer plugins

### Changed:

* Improved application configuration files
* Removed default logs and sessions directory from storage directory

## 🔥 [v1.0.0-alpha.5](https://github.com/zaphyr-org/app/compare/1.0.0-alpha.4...1.0.0-alpha.5) [2025-05-10]

### Changed:

* Updated application to new framework version requirements

### Fixed:

* Fixed app path in phpstan.neon and phpunit.xml.dist

## 🔥 [v1.0.0-alpha.4](https://github.com/zaphyr-org/app/compare/1.0.0-alpha.3...1.0.0-alpha.4) [2025-02-08]

### Changed:

* Updated application to new framework version requirements

## 🔥 [v1.0.0-alpha.3](https://github.com/zaphyr-org/app/compare/1.0.0-alpha.2...1.0.0-alpha.3) [2024-12-22]

### Changed:

* Moved timezone, charset and encryption cipher values to .env
* Changed app source code directory from `src` to `app`

## 🔥 [v1.0.0-alpha.2](https://github.com/zaphyr-org/app/compare/1.0.0-alpha.1...1.0.0-alpha.2) [2024-05-11]

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
