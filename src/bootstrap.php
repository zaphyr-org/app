<?php

declare(strict_types=1);

use App\Exceptions\ExceptionHandler;
use Zaphyr\Framework\Contracts\Exceptions\Handlers\ExceptionHandlerInterface;
use Zaphyr\Framework\Contracts\Kernel\ConsoleKernelInterface;
use Zaphyr\Framework\Contracts\Kernel\HttpKernelInterface;
use Zaphyr\Framework\Kernel\ConsoleKernel;
use Zaphyr\Framework\Kernel\HttpKernel;
use Zaphyr\HttpEmitter\Contracts\EmitterInterface;
use Zaphyr\HttpEmitter\SapiEmitter;

// Create new application instance
$application = new Zaphyr\Framework\Application(dirname(__DIR__));
$container = $application->getContainer();

// Bind important interfaces
$container->bindSingleton(
    HttpKernelInterface::class,
    HttpKernel::class
);

$container->bindSingleton(
    ConsoleKernelInterface::class,
    ConsoleKernel::class
);

$container->bindSingleton(
    ExceptionHandlerInterface::class,
    ExceptionHandler::class
);

$container->bindSingleton(
    EmitterInterface::class,
    SapiEmitter::class
);

// Return bootstrapped application instance
return $application;
