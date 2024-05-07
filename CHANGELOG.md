# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 🔥 v1.0.0-alpha.1 [2024-05-06]

> [!WARNING]
> This release contains the latest development changes, but you should be prepared for anything,
> including sudden breaking changes or code refactoring.

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
