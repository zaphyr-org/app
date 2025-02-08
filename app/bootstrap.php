<?php

use App\Exceptions\ExceptionHandler;
use Zaphyr\Framework\Contracts\Exceptions\Handlers\ExceptionHandlerInterface;
use Zaphyr\Framework\Contracts\Kernel\ConsoleKernelInterface;
use Zaphyr\Framework\Contracts\Kernel\HttpKernelInterface;
use Zaphyr\Framework\Kernel\ConsoleKernel;
use Zaphyr\Framework\Kernel\HttpKernel;
use Zaphyr\HttpEmitter\Contracts\EmitterInterface;
use Zaphyr\HttpEmitter\SapiEmitter;

$application = new Zaphyr\Framework\Application();

/*-------------------------------------------------------
 * BIND ESSENTIAL INTERFACES
 *-------------------------------------------------------
 * To ensure the application functions correctly, key
 * framework interfaces must be bound to their respective
 * implementations. These bindings allow the dependency
 * injection container to resolve the required instances
 * throughout the application.
 *
 * - HttpKernelInterface: Handles incoming HTTP requests.
 * - ConsoleKernelInterface: Manages console commands.
 * - ExceptionHandlerInterface: Handles exceptions globally.
 * - EmitterInterface: Sends HTTP responses to the client.
 */
$application->getContainer()
    ->bindSingleton(HttpKernelInterface::class, HttpKernel::class)
    ->bindSingleton(ConsoleKernelInterface::class, ConsoleKernel::class)
    ->bindSingleton(ExceptionHandlerInterface::class, ExceptionHandler::class)
    ->bindSingleton(EmitterInterface::class, SapiEmitter::class);

return $application;
