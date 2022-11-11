<?php

namespace Zaneevat\Delivery;

use Zaneevat\Delivery\Order\OrderType;

class CDEK implements DeliveryInterface
{
    public function calculation()
    {
    }

    public function orderInfo(string $number, string $type = ''): array
    {
        if (!$type) {
            $type = OrderType::UUID->value;
        }

        return [];
    }

    public static function create(): self
    {
        return new self();
    }
}
