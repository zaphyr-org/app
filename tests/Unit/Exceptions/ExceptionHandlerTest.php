<?php

declare(strict_types=1);

namespace AppTests\Unit\Exceptions;

use App\Exceptions\ExceptionHandler;
use Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use Zaphyr\Config\Contracts\ConfigInterface;
use Zaphyr\Container\Contracts\ContainerInterface;
use Zaphyr\Framework\Contracts\ApplicationInterface;
use Zaphyr\Router\Exceptions\MethodNotAllowedException;
use Zaphyr\Router\Exceptions\NotFoundException;

class ExceptionHandlerTest extends TestCase
{
    protected ApplicationInterface&MockObject $applicationMock;

    protected ContainerInterface&MockObject $containerMock;

    protected ConfigInterface&MockObject $configMock;

    protected ServerRequestInterface&MockObject $serverRequestMock;

    protected ExceptionHandler $exceptionHandler;

    protected function setUp(): void
    {
        $this->applicationMock = $this->createMock(ApplicationInterface::class);
        $this->containerMock = $this->createMock(ContainerInterface::class);
        $this->serverRequestMock = $this->createMock(ServerRequestInterface::class);
        $this->configMock = $this->createMock(ConfigInterface::class);

        $this->applicationMock
            ->expects(self::once())
            ->method('getContainer')
            ->willReturn($this->containerMock);

        $this->containerMock
            ->expects(self::once())
            ->method('get')
            ->with(ConfigInterface::class)
            ->willReturn($this->configMock);

        $this->configMock
            ->expects(self::once())
            ->method('get')
            ->with('app.debug')
            ->willReturn(false);

        $this->exceptionHandler = new ExceptionHandler($this->applicationMock);
    }

    protected function tearDown(): void
    {
        unset(
            $this->applicationMock,
            $this->containerMock,
            $this->serverRequestMock,
            $this->configMock,
            $this->exceptionHandler
        );
    }

    public function test404Error(): void
    {
        $this->applicationMock->expects(self::once())
            ->method('getResourcesPath')
            ->with('views/errors/404.html')
            ->willReturn(dirname(__DIR__, 3) . '/resources/views/errors/404.html');

        $response = $this->exceptionHandler->render($this->serverRequestMock, new NotFoundException());

        self::assertEquals(404, $response->getStatusCode());
    }

    public function test405Error(): void
    {
        $this->applicationMock->expects(self::once())
            ->method('getResourcesPath')
            ->with('views/errors/405.html')
            ->willReturn(dirname(__DIR__, 3) . '/resources/views/errors/405.html');

        $response = $this->exceptionHandler->render($this->serverRequestMock, new MethodNotAllowedException());

        self::assertEquals(405, $response->getStatusCode());
    }

    public function test500Error(): void
    {
        $this->applicationMock->expects(self::once())
            ->method('getResourcesPath')
            ->with('views/errors/500.html')
            ->willReturn(dirname(__DIR__, 3) . '/resources/views/errors/500.html');

        $response = $this->exceptionHandler->render($this->serverRequestMock, new Exception());

        self::assertEquals(500, $response->getStatusCode());
    }
}
