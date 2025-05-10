<?php

use Zaphyr\Framework\Application;
use Zaphyr\Framework\Http\Request;

if (file_exists($maintenance = __DIR__ . '/maintenance.html')) {
    require $maintenance;
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';

/** @var Application $application */
$application = require __DIR__ . '/../app/bootstrap.php';
$application->handleRequest(Request::fromGlobals());
