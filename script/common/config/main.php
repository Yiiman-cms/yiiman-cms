<?php

use kartik\grid\GridView;
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
            'errors'   => ['class' => \YiiMan\YiiBasics\modules\errors\Module::class],
            'gridview' =>  [
                'class' => '\kartik\grid\Module',
                // enter optional module parameters below - only if you need to
                // use your own export download action or custom translation
                // message source
                 'downloadAction' => 'gridview/export/download',
                // 'i18n' => []
            ]
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
            'session'       => ['class' => Session::class]
        ],
    'aliases'    => [
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower',
        '@npm'   => '@vendor/npm-asset',
    ],
];
