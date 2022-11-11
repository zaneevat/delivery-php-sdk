<?php

namespace Zaneevat\Delivery\Calculation;

class Address
{
    public function __construct(
        public string $region,
        public string $city,
        public string $address,
        public string $fullAddress = '',
        public bool $isTerminal = false,
    ) {
    }
}
