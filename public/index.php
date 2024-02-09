<?php

if (file_exists($maintenance = __DIR__ . '/maintenance.html')) {
    require $maintenance;
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';

$application = require_once __DIR__ . '/../src/bootstrap.php';
$application->runHttpRequest(Zaphyr\Framework\Http\Request::fromGlobals());

