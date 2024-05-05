<?php

declare(strict_types=1);

use Zaphyr\Framework\Contracts\Kernel\HttpKernelInterface;
use Zaphyr\Framework\Http\Request;
use Zaphyr\HttpEmitter\Contracts\EmitterInterface;

// Check if maintenance mode is enabled
if (file_exists($maintenance = __DIR__ . '/maintenance.html')) {
    require $maintenance;
    exit;
}

// Require Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

// Get bootstrapped application instance
$application = require_once __DIR__ . '/../src/bootstrap.php';
$container = $application->getContainer();

// Handle HTTP request
$request = Request::fromGlobals();
$response = $container->get(HttpKernelInterface::class)->handle($request);
return $container->get(EmitterInterface::class)->emit($response);
