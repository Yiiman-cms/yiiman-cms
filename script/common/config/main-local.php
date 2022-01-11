<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$_ENV['DATABASE_HOST'].';port='.$_ENV['DATABASE_PORT'].';dbname='.$_ENV['DATABASE_NAME'],
            'username' => $_ENV['DATABASE_USER'],
            'password' => $_ENV['DATABASE_PASSWORD'],
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
