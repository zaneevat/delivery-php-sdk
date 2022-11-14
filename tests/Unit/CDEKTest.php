<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Exception\ClientException;
use Zaneevat\Delivery\CDEK;

final class CDEKTest extends TestCase
{
    private string $testAccount = 'EMscd6r9JnFiQ3bLoyjJY6eM78JrJceI';
    private string $testSecret = 'PjLZkKBHEiLK3YsjtNrt3TGNG0ahs3kG';
    private string $url = 'https://api.edu.cdek.ru/v2/';

    public function testAuthFail(): void
    {
        $this->expectException(ClientException::class);
        CDEK::create(account: 'account', secret: 'secret', url: $this->url);
    }

    public function testAuth(): void
    {
        $this->expectNotToPerformAssertions();
        CDEK::create(account: $this->testAccount, secret: $this->testSecret, url: $this->url);
    }
}
