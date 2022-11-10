<?php

namespace Unit\Services\Api;

use Delivery\SDK\Services\Api\CDEK;
use PHPUnit\Framework\TestCase;

class CDEKTest extends TestCase
{
    public function testOrderInfo(): void
    {
        $orderInfo = CDEK::create()->orderInfo('123');
        $this->assertSame([], $orderInfo);
    }
}
