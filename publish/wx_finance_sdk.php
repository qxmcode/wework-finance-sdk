<?php

declare(strict_types=1);
/**
 * Qxmcode
 * Date Time: 2022/04/11
 */
return [
    'default'   => 'php-ext',
    'providers' => [
        'php-ext' => [
            'driver' => \Qxmcode\WeWorkFinanceSDK\Provider\PHPExtProvider::class,
        ],
        'php-ffi' => [
            'driver' => \Qxmcode\WeWorkFinanceSDK\Provider\FFIProvider::class,
        ],
    ],
];
