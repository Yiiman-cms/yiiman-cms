<?php
/**
 * Created by YiiMan TM.
 * Programmer: gholamreza beheshtian
 * Mobile:+989353466620 | +17272282283
 * Company Phone:05138846411
 * Site:https://yiiman.ir
 * Date: 12/6/2018
 * Time: 8:16 AM
 */



use yii\web\UrlNormalizer;
use Yiiman\ModuleUser\module\models\User;
use YiiMan\YiiBasics\lib\urlManager;
use Yiiman\YiiLibCookie\lib\cookie;

return
    [
        'request'    => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user'       => [
            'identityClass'   => User::className(),
            'enableAutoLogin' => true,
            'identityCookie'  => [
                'name'     => '_identity-frontend',
                'httpOnly' => true
            ],
        ],
        'session'    => [
            // this is the name of the session cookie used for login on the frontend
            'name'     => 'advanced-frontend',
            'savePath' => __DIR__.'/../../../sessions/frontend',
        ],
        'log'        => [
            'traceLevel' => 3,
            'targets'    => [
                [
                    'class'     => 'yii\log\DbTarget',
                    'logTable'  => 'module_systemlog',
                    'microtime' => false,
                    'levels'    => [
                        'error',
                        'warning'
                    ],
                ],
            ],
        ],

//        'cache' => [
//            'class' => 'yii\caching\FileCache',
//        ],
        'urlManager' => [
            'class'           => urlManager::className(),
            'enablePrettyUrl' => true,
            'showScriptName'  => false,

            'normalizer' => [
                'class'  => 'yii\web\UrlNormalizer',
                // use temporary redirection instead of permanent for debugging
                'action' => UrlNormalizer::ACTION_REDIRECT_TEMPORARY,
            ],
            'rules'      =>
                [
                    [
                        'pattern'    => 'form-save',
                        'route'      => 'site/form-save',
                        'normalizer' =>
                            [
                                // do not collapse consecutive slashes for this rule
                                'collapseSlashes' => false,
                            ],
                    ],
                    [
                        'pattern'    => 'search',
                        'route'      => 'site/search',
                        'normalizer' =>
                            [
                                // do not collapse consecutive slashes for this rule
                                'collapseSlashes' => false,
                            ],
                    ],
                    [
                        'pattern'    => 'article',
                        'route'      => 'site/article',
                        'normalizer' =>
                            [
                                // do not collapse consecutive slashes for this rule
                                'collapseSlashes' => false,
                            ],
                    ],
                    [
                        'pattern'    => 'category',
                        'route'      => 'site/category',
                        'normalizer' =>
                            [
                                // do not collapse consecutive slashes for this rule
                                'collapseSlashes' => false,
                            ],
                    ],


                    'category/<id:\w+>'  => 'site/category',
                    'page/<id:\d+>'      => 'site/page',
                    'articles'           => 'site/articles',
                    'project/<id:\d+>'   => 'site/work',
                    'product/<hash:\w+>' => 'site/product',


                    '<slug>' => 'site/slug',
                    '<lang>' => 'site/lang',
//                    '<lang>/<action>' => 'site/langaction',
//                    '<lang>/<action>/<parameter>' => 'site/langaction',

                ],
        ],

    ];
