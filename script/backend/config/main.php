<?php

use yii\debug\Module;
use YiiMan\YiiBasics\modules\useradmin\models\User;

$params = array_merge(
    require __DIR__.'/../../common/config/params.php',
    require __DIR__.'/../../common/config/params-local.php',
    require __DIR__.'/params.php',
    require __DIR__.'/params-local.php'
);

//	$modules['debug'] = [ 'class' => yii\debug\Module::className() ];
return [
    'id'                  => 'app-backend',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => ['log'],
    'modules'             =>
        [
            'useradmin' => ['class' => \YiiMan\YiiBasics\modules\useradmin\Module::class],
            'setting'   => ['class' => \YiiMan\Setting\module\Module::class],
            'rbac'      => ['class' => \YiiMan\YiiBasics\modules\rbac\Module::class],
            'menu'      => ['class' => \YiiMan\YiiBasics\modules\menu\Module::class],
        ],
    'components'          =>
        [

            'request'      =>
                [
                    'csrfParam' => '_csrf-backend',
                ],
            'user'         =>
                [
                    'identityClass'   => User::class,
                    'enableAutoLogin' => true,
                    'identityCookie'  => [
                        'name'     => '_identity-backend',
                        'httpOnly' => true
                    ],
                    'loginUrl'        => 'useradmin/login',
                ],
            'session'      =>
                [
                    // this is the name of the session cookie used for login on the backend
                    'name'     => 'advanced-backend',
//					'useCookies' => true ,
                    'savePath' => __DIR__.'/../../../sessions/backend',
                    'timeout'  => 1440
                ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],

            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
                'rules'           => [
                    'pt/create/<posttype:\w+>'          => 'posttypes/default/create',
                    'pt/update/<posttype:\w+>/<id:\d+>' => 'posttypes/default/update',
                    'pt/delete/<posttype:\w+>/<id:\d+>' => 'posttypes/default/delete',
                    'pt/view/<posttype:\w+>/<id:\d+>'   => 'posttypes/default/view',
                    'pt/<posttype:\w+>'                 => 'posttypes/default/index',
                    'logout'                            => 'useradmin/login/logout',
                ],
            ],

        ],
    'params'              => $params,
];
