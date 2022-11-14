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

$cdek = \Zaneevat\Delivery\CDEK::create('login', 'password');

$orderInfo = $cdek->orderInfo('')
$calculation = $cdek
    ->setConfig([
        'url' => 'https://api.cdek.ru/',
        'client_id' => 'Client ID',
        'client_secret' => 'Client Secret',
    ])
    ->calculation();

$delivery = \Zaneevat\Delivery\Delivery::create()
    ->setConfig([
        'cdek' => [
            'url' => 'https://api.cdek.ru/',
            'client_id' => 'Client ID',
            'client_secret' => 'Client Secret',
        ],
    ]);

$calculation = $delivery
    ->setServices([\Zaneevat\Delivery\Company::CDEK->value])
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
    ->setServices([\Zaneevat\Delivery\Company::CDEK->value])
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

$orderInfo1 = \Zaneevat\Delivery\Company::from('cdek')->create()->orderInfo();
```
