<?php

namespace Zaneevat\Delivery\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Zaneevat\Delivery\CDEK;
use Zaneevat\Delivery\Company;
use Zaneevat\Delivery\DeliveryInterface;

final class CompanyTest extends TestCase
{
    public function testGetClass(): void
    {
        $cdekClass = Company::CDEK->getClass();
        $this->assertEquals(CDEK::class, $cdekClass);
    }

    /**
     * @throws \Exception
     */
    public function testCreate(): void
    {
        $cdek = Company::CDEK->create();
        $this->assertInstanceOf(DeliveryInterface::class, $cdek);
    }
}
