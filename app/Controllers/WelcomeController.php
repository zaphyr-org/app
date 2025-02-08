<?php

declare(strict_types=1);

namespace App\Controllers;

use Zaphyr\Framework\Contracts\ApplicationInterface;
use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Router\Attributes\Get;
use Zaphyr\Utils\Exceptions\UtilsException;

class WelcomeController
{
    /**
     * @param ApplicationInterface $application
     */
    public function __construct(protected ApplicationInterface $application)
    {
    }

    /**
     * @throws UtilsException if the view file is not found
     */
    #[Get(path: '/', name: 'welcome')]
    public function indexAction(): HtmlResponse
    {
        return view($this->application, 'welcome', [
            'php_version' => phpversion(),
            'zaphyr_version' => $this->application->getVersion(),
        ]);
    }
}
