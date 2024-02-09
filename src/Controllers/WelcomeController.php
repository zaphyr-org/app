<?php

declare(strict_types=1);

namespace App\Controllers;

use Zaphyr\Framework\Application;
use Zaphyr\Framework\Contracts\ApplicationInterface;
use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Router\Attributes\Get;

class WelcomeController
{
    /**
     * @param ApplicationInterface $application
     */
    public function __construct(protected ApplicationInterface $application)
    {
    }

    #[Get(path: '/', name: 'welcome')]
    public function indexAction(): HtmlResponse
    {
        return view($this->application, 'welcome', ['version' => Application::VERSION]);
    }
}
