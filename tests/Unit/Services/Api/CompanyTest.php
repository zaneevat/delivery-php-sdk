<?php

namespace Unit\Services\Api;

use Delivery\SDK\Services\Api\CDEK;
use Delivery\SDK\Services\Company;
use Delivery\SDK\Services\DeliveryInterface;
use Exception;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    public function testGetClass(): void
    {
        $cdekClass = Company::CDEK->getClass();
        $this->assertEquals(CDEK::class, $cdekClass);
    }

    /**
     * @throws Exception
     */
    public function testCreate(): void
    {
        $cdek = Company::CDEK->create();
        $this->assertInstanceOf(DeliveryInterface::class, $cdek);
    }
}
