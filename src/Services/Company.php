<?php

namespace Delivery\SDK\Services;

use Delivery\SDK\Services\Api\CDEK;

enum Company: string
{
    case CDEK = 'cdek';

    public function getClass(): string
    {
        return match ($this) {
            self::CDEK => CDEK::class,
        };
    }

    public function initObject()
    {
        return match ($this) {
            self::CDEK => CDEK::create()
        };
    }
}
