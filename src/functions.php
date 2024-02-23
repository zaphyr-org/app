<?php

declare(strict_types=1);

use Zaphyr\Framework\Contracts\ApplicationInterface;
use Zaphyr\Framework\Http\HtmlResponse;
use Zaphyr\Utils\Exceptions\UtilsException;
use Zaphyr\Utils\Template;

if (!function_exists('view')) {
    /**
     * @param ApplicationInterface  $app
     * @param string                $view
     * @param array<string, string> $data
     *
     * @throws UtilsException if the view could not be rendered
     * @return HtmlResponse
     */
    function view(ApplicationInterface $app, string $view, array $data = []): HtmlResponse
    {
        $template = $app->getResourcesPath('views/' . $view . '.html');
        $html = Template::render($template, $data);

        return new HtmlResponse($html);
    }
}
