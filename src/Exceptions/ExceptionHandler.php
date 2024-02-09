<?php

declare(strict_types=1);

namespace App\Exceptions;

use Psr\Http\Message\ResponseInterface;
use Throwable;
use Zaphyr\Framework\Exceptions\Handlers\ExceptionHandler as BaseExceptionHandler;
use Zaphyr\Router\Exceptions\MethodNotAllowedException;
use Zaphyr\Router\Exceptions\NotFoundException;
use Zaphyr\Utils\Template;

class ExceptionHandler extends BaseExceptionHandler
{
    /**
     * {@inheritdoc}
     */
    protected function renderHtmlView(ResponseInterface $response, Throwable $throwable): ResponseInterface
    {
        $template = match (get_class($throwable)) {
            NotFoundException::class => '404.html',
            MethodNotAllowedException::class => '405.html',
            default => '500.html',
        };

        $response->getBody()->write(
            Template::render($this->application->getResourcesPath('views/errors/' . $template))
        );

        return $response;
    }
}
