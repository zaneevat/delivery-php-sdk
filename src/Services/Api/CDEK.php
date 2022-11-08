<?php

namespace Delivery\SDK\Services\Api;

class CDEK
{
    public function order(string $number, string $type = ''): array
    {
        if (!$type) {
            $type = OrderType::UUID->value;
        }

        return [];
    }
}
