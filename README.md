REST API PHP SDK служб доставки
================

### Зависимости
- PHP: >= 8.1

### Полезные команды
- composer phpunit
- composer phpstan
- composer php-cs-fixer

### Как использовать

```php
<?php

$cdek = \Delivery\SDK\CDEK::create();
$orderInfo = $cdek->orderInfo('')
$calculation = $cdek
    ->setConfig([
        'url' => 'https://api.cdek.ru/',
        'client_id' => 'Client ID',
        'client_secret' => 'Client Secret',
    ])
    ->calculation();

$delivery = \Delivery\SDK\Services\Delivery::create()
    ->setConfig([
        'cdek' => [
            'url' => 'https://api.cdek.ru/',
            'client_id' => 'Client ID',
            'client_secret' => 'Client Secret',
        ],
    ]);

$calculation = $delivery
    ->setServices([\Delivery\SDK\Services\Company::CDEK->value])
    ->calculation([
        'from' => [
            'city' => 'Москва',
        ],
        'to' => [
            'city' => 'Санкт-Петербург',
        ],
        'items' => [
        
        ],                  
    ]);
    
$multipleCalculations = $delivery
    ->setServices([\Delivery\SDK\Services\Company::CDEK->value])
    ->multipleCalculations([
        [
            'from' => [
                'city' => 'Москва',
            ],
            'to' => [
                'city' => 'Санкт-Петербург',
            ],
            'items' => [
            
            ],
        ],            
    ]);

$orderInfo1 = \Delivery\SDK\Services\Company::from('cdek')->create()->orderInfo();
```
