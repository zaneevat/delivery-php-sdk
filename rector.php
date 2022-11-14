<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_81);

    $rectorConfig->phpstanConfig(__DIR__.'/phpstan.neon.dist');

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
    ]);

    $rectorConfig->rule(TypedPropertyRector::class);
};
