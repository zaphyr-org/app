<?php

declare(strict_types=1);

namespace App\Controllers;

use Zaphyr\Framework\Application;
use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Router\Attributes\Get;

class WelcomeController
{
    #[Get('/')]
    public function indexAction(): HtmlResponse
    {
        return view('welcome', ['zaphyr_version' => Application::VERSION, 'php_version' => PHP_VERSION]);
    }
}
