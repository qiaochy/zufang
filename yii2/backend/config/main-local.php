<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '_gXmA0SUXwko4EbQaMx-Y57V4heO9doT',
        ],
        //   'assetManager'=>[
        //     'bundles'=>[
        //         'yii\web\JqueryAsset'=>[
        //             'jsOptions'=>[
        //                 'position'=>\yii\web\View::POS_HEAD,
        //             ]
        //         ]
        //     ]
        // ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
