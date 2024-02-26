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
        $statusCode = $this->determineStatusCode($throwable);

        return view($this->application, 'errors/' . $statusCode, statusCode: $statusCode);
    }

    /**
     * @param Throwable $throwable
     *
     * @return int
     */
    protected function determineStatusCode(Throwable $throwable): int
    {
        $code = $throwable->getCode();

        return ($code !== 404 && $code !== 405) ? 500 : $code;
    }
}
