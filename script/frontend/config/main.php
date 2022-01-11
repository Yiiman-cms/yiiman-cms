<?php

//use system\modules\gen\Module;
use Yiiman\ModuleUser\module\models\User;

$params = array_merge(
    require __DIR__.'/../../common/config/params.php',
    require __DIR__.'/../../common/config/params-local.php',
    require __DIR__.'/params.php',
    require __DIR__.'/params-local.php'
);

$components = require_once realpath(__DIR__.'/components.php');

return
    [
        'name'                => '',
        'id'                  => 'app-frontend',
        'basePath'            => dirname(__DIR__),
//			'bootstrap'           => [ 'log' ] ,
        'controllerNamespace' => 'frontend\controllers',
        'modules'             => [
//            'gen' => Module::class
        ],
        'components'          =>
             $components,
        'params'              => $params,
    ];





