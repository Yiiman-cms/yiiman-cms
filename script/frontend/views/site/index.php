<?php

/* @var $this yii\web\View */

/**
 * @var $model Pages
 */


use yii\db\Expression;
use YiiMan\YiiBasics\modules\pages\models\Pages;
use YiiMan\YiiBasics\modules\parameters\models\Parameters;

/**
 * @var $menus [] ها منو
 */
/**
 * @var $section [] سایت محتوای
 */
$this->title = $model->title;


echo Parameters::filter($model->content);

