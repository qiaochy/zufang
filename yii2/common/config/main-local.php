<?php
return [

    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.1.30;dbname=yii',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [  
                                    'class' => 'Swift_SmtpTransport',  
                                    'host' => 'smtp.163.com',  //每种邮箱的host配置不一样
                                    'username' => '18511694089@163.com',  
                                    'password' => 'feng987368515',  
                                    'port' => '25',  
                                    'encryption' => 'tls',                             
                                    ],   
            'messageConfig'=>[  
                                     'charset'=>'UTF-8',  
                                     'from'=>['18511694089@163.com'=>'幻想科技']  
                                     ],  
        ],
        'request'=>array(
            // Enable Yii Validate CSRF Token
            'enableCsrfValidation' => false,
        ),
        // 'assetManager'=>[
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
