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

            'language'      => ['class' => YiiMan\YiiBasics\modules\language\Module::class],
            'blog'          => ['class' => \YiiMan\YiiBasics\modules\blog\Module::class],
            'errors'        => ['class' => \YiiMan\YiiBasics\modules\errors\Module::class],
            'filemanager'   => ['class' => \YiiMan\YiiBasics\modules\filemanager\Module::class],
            'form'          => ['class' => \YiiMan\YiiBasics\modules\form\Module::class],
            'gallery'       => ['class' => \YiiMan\YiiBasics\modules\gallery\Module::class],
            'hint'          => ['class' => \YiiMan\YiiBasics\modules\hint\Module::class],
            'location'      => ['class' => \YiiMan\YiiBasics\modules\location\Module::class],
            'log'           => ['class' => \YiiMan\YiiBasics\modules\log\Module::class],
            'logs'          => ['class' => \YiiMan\YiiBasics\modules\logs\Module::class],
            'menumoders'    => ['class' => \YiiMan\YiiBasics\modules\menumodern\Module::class],
            'notification'  => ['class' => \YiiMan\YiiBasics\modules\notification\Module::class],
            'pages'         => ['class' => \YiiMan\YiiBasics\modules\pages\Module::class],
            'parameters'    => ['class' => \YiiMan\YiiBasics\modules\parameters\Module::class],
            'posttypes'     => ['class' => \YiiMan\YiiBasics\modules\posttypes\Module::class],
            'report'        => ['class' => \YiiMan\YiiBasics\modules\report\Module::class],
            'rss'           => ['class' => \YiiMan\YiiBasics\modules\rss\Module::class],
            'search'        => ['class' => \YiiMan\YiiBasics\modules\search\Module::class],
            'seo'           => ['class' => \YiiMan\YiiBasics\modules\seo\Module::class],
            'sessions'      => ['class' => \YiiMan\YiiBasics\modules\sessions\Module::class],
            'slider'        => ['class' => \YiiMan\YiiBasics\modules\slider\Module::class],
            'slug'          => ['class' => \YiiMan\YiiBasics\modules\slug\Module::class],
            'sms'           => ['class' => \YiiMan\YiiBasics\modules\sms\Module::class],
            'systemlog'     => ['class' => \YiiMan\YiiBasics\modules\systemlog\Module::class],
            'testimotional' => ['class' => \YiiMan\YiiBasics\modules\testimotional\Module::class],
            'ticket'        => ['class' => \YiiMan\YiiBasics\modules\ticket\Module::class],
            'widget'        => ['class' => \YiiMan\YiiBasics\modules\widget\Module::class],
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
