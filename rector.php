<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src']);
    $rectorConfig->importNames();
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
    ]);
};
