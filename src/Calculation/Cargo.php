<?php

namespace Zaneevat\Delivery\Calculation;

class Cargo
{
    public function __construct(
        public int $count,
        public float $weight,
        public float $volume,
        public array $items = [],
        public float $price = 0.0,
    ) {
    }
}
