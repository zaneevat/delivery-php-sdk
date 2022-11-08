<?php

namespace Unit\Services\Api;

use Delivery\SDK\Services\Api\CDEK;
use PHPUnit\Framework\TestCase;

class CDEKTest extends TestCase
{
    public function testInit(): void
    {
        $order = (new CDEK())->order('123');
        $this->assertEquals([], $order);
    }
}
