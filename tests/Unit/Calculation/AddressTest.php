<?php

namespace Zaneevat\Delivery\Tests\Unit\Calculation;

use PHPUnit\Framework\TestCase;
use Zaneevat\Delivery\Calculation\Address;

final class AddressTest extends TestCase
{
    public function testAddress(): void
    {
        $address = new Address(region: 'Самарская область', city: 'Самара', address: 'ул. Ленина');
        $this->assertSame('Самарская область', $address->region);
        $this->assertSame('Самара', $address->city);
        $this->assertSame('ул. Ленина', $address->address);
    }

    public function testAddressArray(): void
    {
        $address = new Address(...[
            'city' => 'Самара',
            'region' => 'Самарская область',
            'address' => 'ул. Ленина, д. 6',
            'fullAddress' => 'Самарская область, г. Самара, ул. Ленина, д. 6',
            'isTerminal' => true,
        ]);
        $this->assertSame('Самарская область', $address->region);
        $this->assertSame('Самара', $address->city);
        $this->assertSame('ул. Ленина, д. 6', $address->address);
        $this->assertSame('Самарская область, г. Самара, ул. Ленина, д. 6', $address->fullAddress);
        $this->assertTrue($address->isTerminal);
    }
}
