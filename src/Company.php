<?php

namespace Zaneevat\Delivery;

enum Company: string
{
    case CDEK = 'cdek';

    public function getClass(): string
    {
        return match ($this) {
            self::CDEK => CDEK::class,
        };
    }

    /**
     * @throws \Exception
     */
    public function create(): DeliveryInterface
    {
        $class = $this->getClass();

        if (!is_subclass_of($class, DeliveryInterface::class)) {
            throw new \Exception(sprintf("Class $class does not implement interface %s", DeliveryInterface::class));
        }

        return $class::create();
    }
}
