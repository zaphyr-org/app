<?php

declare(strict_types=1);

use Zaphyr\Framework\Application;
use Zaphyr\Framework\Contracts\ApplicationInterface;
use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Framework\Http\Utils\StatusCode;
use Zaphyr\Utils\Exceptions\UtilsException;
use Zaphyr\Utils\Template;

if (!function_exists('app')) {
    /**
     * Get the application instance.
     *
     * @return ApplicationInterface
     */
    function app(): ApplicationInterface
    {
        return Application::getInstance();
    }
}

if (!function_exists('view')) {
    /**
     * Render a view and return an HTML response.
     *
     * @param string                $view
     * @param array<string, string> $data
     * @param int                   $statusCode
     *
     * @throws UtilsException if the view file is not found
     * @return HtmlResponse
     */
    function view(string $view, array $data = [], int $statusCode = StatusCode::OK): HtmlResponse
    {
        $template = app()->getResourcesPath("views/$view.html");

        return new HtmlResponse(Template::render($template, $data), $statusCode);
    }
}
