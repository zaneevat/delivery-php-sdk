<?php

namespace Zaneevat\Delivery\Calculation;

class CalculationData
{
    public Address $shippingAddress;
    public Address $deliveryAddress;
    public Cargo $cargo;

    public function __construct(array $data)
    {
        $this->shippingAddress = new Address(...$data['shippingAddress']);
        $this->deliveryAddress = new Address(...$data['deliveryAddress']);
        $this->cargo = new Cargo(...$data['cargo']);
    }
}
