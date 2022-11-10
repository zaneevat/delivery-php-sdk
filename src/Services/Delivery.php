<?php

namespace Delivery\SDK\Services;

class Delivery
{
    private array $config;
    private array $services;

    public function __construct()
    {
        $this->services = Company::cases();
        $this->config = []; // TODO: Реализовать получение из конфиг файла
    }

    public function setConfig(array $config): self
    {
        $this->config = $config;

        return $this;
    }

    public function setServices(array $services): self
    {
        $this->services = $services;

        return $this;
    }

    public function calculation(array $params): array
    {
        return [];
    }

    /**
     * @return array []int
     */
    public function multipleCalculations(array $params): array
    {
        $array = [];

        foreach ($params as $param) {
            $array[] = $this->calculation($params);
        }

        return $array;
    }

    public static function create(): self
    {
        return new self();
    }
}
