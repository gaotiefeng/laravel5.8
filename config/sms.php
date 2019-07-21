<?php

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,
    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,
        // 默认可用的发送网关
        'gateways' => [
            'huawei',
        ],
    ],

    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'huawei' => [
            'endpoint' => 'https://api.rtc.huaweicloud.com:10443', // APP接入地址
            'app_key' => '46Af6iY3U32I5EQtF7tpm9kq241X', // APP KEY
            'app_secret' => 'nCYL70aNVwR8a24Z4SDtTAkL4Kye', // APP SECRET
            'from' => [
                'default' => '8819071142595', // 默认使用签名通道号
                'custom' => '', // 其他签名通道号 可以在 data 中定义 from 来指定
                'abc' => '', // 其他签名通道号
            ],
            'callback' => '', // 短信状态回调地址
        ],
    ],
];
