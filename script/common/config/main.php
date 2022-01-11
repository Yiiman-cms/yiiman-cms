<?php

use YiiMan\LibUploadManager\lib\File;
use YiiMan\LibUploadManager\lib\UploadManager;
use YiiMan\YiiBasics\lib\AssetBundle;
use YiiMan\YiiBasics\lib\AssetManager;
use YiiMan\YiiBasics\lib\Develop;
use YiiMan\YiiBasics\lib\i18N;
use YiiMan\YiiBasics\lib\Language;
use YiiMan\functions\functions;
use YiiMan\LibUploadManager\lib\ImageManager;
use YiiMan\Setting\module\components\Options;
use YiiMan\YiiBasics\lib\Cachee;
use YiiMan\YiiBasics\lib\DB;
use YiiMan\YiiBasics\lib\Session;
use YiiMan\YiiBasics\lib\View;
use YiiMan\YiiBasics\modules\errors\Module;
use YiiMan\YiiBasics\modules\rbac\lib\authManager;
use Yiiman\YiiLibCookie\lib\cookie;
use YiiMan\YiiLibMeta\lib\MetaLib;

if (!function_exists('ec')) {
    function ec($text)
    {
        if (!empty($text)) {
            echo $text;
        }
    }
}

return [

    'language'   => 'fa_ir',
    'name'       => '',
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'modules'    =>
        [
            'language'      => ['class' => YiiMan\YiiBasics\modules\language\Module::class],
            'blog'          => ['class' => \YiiMan\YiiBasics\modules\blog\Module::class],
            'errors'        => ['class' => Module::class],
            'filemanager'   => ['class' => \YiiMan\YiiBasics\modules\filemanager\Module::class],
            'form'          => ['class' => \YiiMan\YiiBasics\modules\form\Module::class],
            'gallery'       => ['class' => \YiiMan\YiiBasics\modules\gallery\Module::class],
            'hint'          => ['class' => \YiiMan\YiiBasics\modules\hint\Module::class],
            'location'      => ['class' => \YiiMan\YiiBasics\modules\location\Module::class],
            'log'           => ['class' => \YiiMan\YiiBasics\modules\log\Module::class],
            'logs'          => ['class' => \YiiMan\YiiBasics\modules\logs\Module::class],
            'menu'          => ['class' => \YiiMan\YiiBasics\modules\menu\Module::class],
            'menumoders'    => ['class' => \YiiMan\YiiBasics\modules\menumodern\Module::class],
            'notification'  => ['class' => \YiiMan\YiiBasics\modules\notification\Module::class],
            'pages'         => ['class' => \YiiMan\YiiBasics\modules\pages\Module::class],
            'parameters'    => ['class' => \YiiMan\YiiBasics\modules\parameters\Module::class],
            'posttypes'     => ['class' => \YiiMan\YiiBasics\modules\posttypes\Module::class],
            'rbac'          => ['class' => \YiiMan\YiiBasics\modules\rbac\Module::class],
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
            'useradmin'     => ['class' => \YiiMan\YiiBasics\modules\useradmin\Module::class],
            'widget'        => ['class' => \YiiMan\YiiBasics\modules\widget\Module::class],
        ],
    'timeZone'   => 'Asia/Tehran',
    'components' =>
        [
            'Options'       => Options::class,
            'options'       => Options::class,
            'MetaLib'       => MetaLib::class,
            'ImageManager'  => ImageManager::class,
            'File'          => File::class,
            'functions'     => functions::class,
            'cookie'        => cookie::class,
            'i18n'          => i18N::class,
            'Language'      => Language::class,
            'DB'            => DB::class,
            'Cachee'        => Cachee::class,
            'Develop'       => Develop::class,
            'UploadManager' => UploadManager::class,
            'authManager'   => authManager::class,
            'errorHandler'  => ['errorAction' => 'errors/default/error'],
            'assetBundle'   => AssetBundle::class,
            'view'          => View::class,
            'assetManager'  => AssetManager::class,
            'session'       => ['class'=>Session::class]
        ],
    'aliases'    => [
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower',
        '@npm'   => '@vendor/npm-asset',
    ],
];
