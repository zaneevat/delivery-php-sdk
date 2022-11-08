<?php

namespace Unit\Services\Api;

use Delivery\SDK\Services\Api\CDEK;
use Delivery\SDK\Services\Company;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    public function testGetClass(): void
    {
        $cdekClass = Company::CDEK->getClass();
        $this->assertEquals(CDEK::class, $cdekClass);
    }
}
