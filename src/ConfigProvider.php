<?php

declare(strict_types=1);
/**
 * Qxmcode
 * Date Time: 2022/04/11
 */
namespace Qxmcode\WeWorkFinanceSDK;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'dependencies' => [
            ],
            'commands' => [
            ],
            'publish' => [
                [
                    'id'          => 'wx_finance_sdk',
                    'description' => '企业微信会话内容存档',
                    'source'      => __DIR__ . '/../publish/wx_finance_sdk.php',
                    'destination' => BASE_PATH . '/config/autoload/wx_finance_sdk.php',
                ],
            ],
        ];
    }
}
