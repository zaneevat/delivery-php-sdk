<?php

namespace Delivery\SDK\Services\Api;

use Delivery\SDK\Services\DeliveryInterface;

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
