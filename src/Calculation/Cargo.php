<?php

namespace Zaneevat\Delivery\Calculation;

class Cargo
{
    /** @var CargoItem[] */
    public array $items;

    public function __construct(
        public int $count,
        public float $weight,
        public float $volume,
        public float $price = 0.0,
        array $items = [],
    ) {
        foreach ($items as $item) {
            $this->items[] = new CargoItem(...$item);
        }
    }
}
