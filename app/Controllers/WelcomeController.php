<?php

declare(strict_types=1);

namespace App\Controllers;

use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Router\Attributes\Get;

class WelcomeController
{
    #[Get(path: '/', name: 'welcome')]
    public function indexAction(): HtmlResponse
    {
        return view('welcome', ['php_version' => PHP_VERSION, 'zaphyr_version' => app()->getVersion()]);
    }
}
