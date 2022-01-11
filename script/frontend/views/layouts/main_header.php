<?php

/* @var $this \yii\web\View */

/* @var $content string */


use yii\widgets\Breadcrumbs;
use YiiMan\YiiBasics\widgets\multiRowInput\assets\FontAwesomeAsset;

$this->title = $this->title ? $this->title : Yii::$app->Options->siteTitle;
$baseUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
\system\assets\fonts\FontsAssets::register($this);
FontAwesomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= strtolower(Yii::$app->language) ?>">
<?php include_once __DIR__ . '/head.php' ?>
<body class="page-main">
<div id="preloader"></div>
<!-- Page-->
<?php $this->beginBody() ?>

<?= $this->render('menu', ['baseUrl' => $baseUrl]) ?>
<style>
    main {
        background: white;
    }
</style>
<!-- Page-->
<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080"
        data-natural-width="1920" data-bleed="0"
        data-image-src="<?= !empty($model->back) ? $model->back : $model->getdefaultImageLink('1920*1080') ?>"
        data-offset="0">
    <div class="container">
        <h1><?= $model->title ?></h1>

        <?= Breadcrumbs::widget(
            [
                'tag' => 'ol',
            ]
        ) ?>
    </div>
</header>
<main>
    <begincontent>
        <?= $content ?>
    </begincontent>
</main>
<beginFooter>
    <?= $this->render('footer', ['baseUrl' => $baseUrl]) ?>
</beginFooter>
<!-- Java script-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
