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
        return view($this->application, 'errors/' . $this->determineStatusCode($throwable));
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
