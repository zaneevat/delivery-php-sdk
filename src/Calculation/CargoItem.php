<?php

namespace Zaneevat\Delivery\Calculation;

class CargoItem
{
    public function __construct(
        public int $count = 1,
        public float $weight = 0.0,
        public float $length = 0.0,
        public float $width = 0.0,
        public float $height = 0.0,
    ) {
    }
}
