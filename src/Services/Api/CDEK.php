<?php

namespace Delivery\SDK\Services\Api;

class CDEK
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
