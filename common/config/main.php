<?php
$config =  [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//         'cache' => [
//             'class' => 'yii\caching\MemCache',
//             'servers' => [
//                 [
//                     'host' => '127.0.0.1',
//                     'port' => 11211,
//                     'weight' => 60,
//                 ],
//             ],
//         ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
    ],
];
if(ERRAND_ENV_TEST){
    $config['components']['db'] = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yiiboot3',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ];
}else{
    $config['components']['db'] = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yiiboot3',
        'username' => 'root',
        'password' => 'qian!2018',
        'charset' => 'utf8',
    ];
}
return $config;


