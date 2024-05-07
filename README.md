> [!WARNING]
> The app does not yet have a stable version. It is still under development.

![License](https://img.shields.io/github/license/zaphyr-org/app?style=for-the-badge)
![Version](https://img.shields.io/packagist/v/zaphyr-org/app?style=for-the-badge)
![Downloads](https://img.shields.io/packagist/dt/zaphyr-org/app?style=for-the-badge)
![Stars](https://img.shields.io/github/stars/zaphyr-org/app?style=for-the-badge)
![Issues](https://img.shields.io/github/issues/zaphyr-org/app?style=for-the-badge)

# Skeleton Application

Use this skeleton application to start your next project with ZAPHYR. This application is pre-configured with the
[ZAPHYR framework](https://github.com/zaphyr-org/framework) and includes a basic directory structure, configuration
files, and a sample controller and view.

This skeleton application is optimized for Composer, making it quick and easy to set up a new application.

## System Requirements

Before you start, ensure the following are installed on your system:

* [PHP](https://www.php.net) 8.1 or higher, along with the following PHP extensions:
    * [Ctype](https://www.php.net/book.ctype)
    * [DOM](https://www.php.net/book.dom)
    * [Fileinfo](https://www.php.net/book.fileinfo)
    * [JSON](https://www.php.net/book.json)
    * [libxml](https://www.php.net/book.libxml)
    * [Multibyte String](https://www.php.net/book.mbstring)
    * [OpenSSL](https://www.php.net/book.openssl)
    * [SimpleXML](https://www.php.net/book.simplexml)
* [Composer](https://getcomposer.org/)
* A [web server](https://www.php.net/manual/features.commandline.webserver.php) with URL rewriting capability

> [!TIP]
> ZAPHYR requires PHP 8.1 as the minimum version. However, we recommend using the
> [latest stable version of PHP](https://www.php.net/supported-versions.php) for the best experience.

## Installation

This guide will walk you through the process of creating a new ZAPHYR application using the skeleton application.

### Create application

To create a new application, open a terminal (either Command Prompt or Terminal app, depending on your OS) and run the
following Composer command from the directory where you want to install your application:

```console
composer create-project zaphyr-org/app my-app
```

This command installs a fresh skeleton application in a directory named `my-app`. Feel free to replace `my-app` with
your desired application name.

### Setup and run application

After creating the application, navigate to your application directory (`my-app`):

```console
cd my-app
```

Set the `APP_URL` environment variable in the `.env` file at the root of your project directory:

```bash
APP_URL=http://localhost:8000
```

To start the [built-in PHP web server](https://www.php.net/manual/features.commandline.webserver.php) from the root of
your project, run the following command:

```console
php -S localhost:8000 -t public
```

The application is now running on `http://localhost:8000`. You can access it in your browser by visiting the URL.

## Documentation

Read the full [documentation](https://zaphyr.org/docs/framework/latest/welcome) to learn more about the framework.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Issues

Bug reports and feature requests can be submitted on the [GitHub Issue Tracker](https://github.com/zaphyr-org/app/issues).

## Security

If you discover security related issues, please email security@zaphyr.org **instead of using the issue tracker!**

## Contributing

Please see [CONTRIBUTING](https://zaphyr.org/docs/contributing) for details.

## Code of Conduct

Please see [CODE OF CONDUCT](https://zaphyr.org/docs/code-of-conduct) for details.

## License

This project is licensed under the MIT license. See [LICENSE](LICENSE.md) for more information.
