<?php

namespace Zaneevat\Delivery\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Zaneevat\Delivery\CDEK;

final class CDEKTest extends TestCase
{
    public function testOrderInfo(): void
    {
        $orderInfo = CDEK::create()->orderInfo('123');
        $this->assertSame([], $orderInfo);
    }
}
