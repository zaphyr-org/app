<?php

use App\Exceptions\ExceptionHandler;
use Zaphyr\Framework\Application;
use Zaphyr\Framework\Contracts\Exceptions\Handlers\ExceptionHandlerInterface;

$application = new Application(dirname(__DIR__), initBindingsOverwrites: [
    ExceptionHandlerInterface::class => ExceptionHandler::class
]);

return $application;
