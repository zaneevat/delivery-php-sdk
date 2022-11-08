<?php

namespace Delivery\SDK\Services\Api;

enum OrderType: string
{
    case UUID = 'uuid';
    case CDEK_NUMBER = 'cdek_number';
    case IM_NUMBER = 'im_number';
}
