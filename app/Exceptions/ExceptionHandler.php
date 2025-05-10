<?php

declare(strict_types=1);

namespace App\Exceptions;

use Psr\Http\Message\ResponseInterface;
use Throwable;
use Zaphyr\Framework\Exceptions\Handlers\ExceptionHandler as BaseExceptionHandler;
use Zaphyr\Utils\Exceptions\UtilsException;

class ExceptionHandler extends BaseExceptionHandler
{
    /**
     * {@inheritdoc}
     *
     * @throws UtilsException if the view file is not found
     */
    protected function renderHtmlView(ResponseInterface $response, Throwable $throwable): ResponseInterface
    {
        $statusCode = $this->determineStatusCode($throwable);

        return view('errors/' . $statusCode, statusCode: $statusCode);
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
