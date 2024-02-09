<?php

declare(strict_types=1);

namespace AppTests\Functional\Controllers;

use Zaphyr\Framework\Testing\HttpTestCase;

class WelcomeControllerTest extends HttpTestCase
{
    public function testIndex(): void
    {
        self::assertOk($this->get('/'));
    }
}
