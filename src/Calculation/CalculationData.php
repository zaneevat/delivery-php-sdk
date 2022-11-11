<?php

namespace Zaneevat\Delivery\Calculation;

class CalculationData
{
    public function __construct(
        public Address $shippingAddress,
        public Address $deliveryAddress,
        public Cargo $cargo,
    ) {
    }
}
