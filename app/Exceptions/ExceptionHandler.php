<?php

declare(strict_types=1);

namespace App\Exceptions;

use Psr\Http\Message\ResponseInterface;
use Throwable;
use Zaphyr\Framework\Exceptions\Handlers\ExceptionHandler as BaseExceptionHandler;

class ExceptionHandler extends BaseExceptionHandler
{
    /**
     * {@inheritdoc}
     */
    protected function renderHtmlView(ResponseInterface $response, Throwable $throwable): ResponseInterface
    {
        try {
            $statusCode = $throwable->getCode();

            return view('errors/' . $statusCode, statusCode: $statusCode);
        } catch (Throwable) {
            return parent::renderHtmlView($response, $throwable);
        }
    }
}
