<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

use common\widgets\Alert;
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
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="spinner">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
    </div>
</div>
<!--loader end-->
<!-- Page-->
<?php $this->beginBody() ?>


<!-- Page-->
<div class="main">
    <?= $this->render('header', ['baseUrl' => $baseUrl]) ?>
    <?= $this->render('menu', ['baseUrl' => $baseUrl]) ?>
    <!-- wrapper  -->
    <div id="wrapper">

        <div class="content full-height  hidden-item no-mob-hidden ch" data-pagetitle="<?= !empty($model->title)?$model->title:Yii::$app->Options->siteTitle ?>">
            <!--content -->
            <begincontent>
                <?= $content ?>
            </begincontent>
            <!--content end-->
        </div>
        <!--share-wrapper-->
        <div class="share-wrapper">
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!--share-wrapper end-->
    </div>
    <!-- wrapper end -->
    <!-- cursor-->
    <div class="element">
        <div class="element-item"></div>
    </div>
    <!-- cursor end-->
</div>
<beginFooter>
    <?= $this->render('footer', ['baseUrl' => $baseUrl]) ?>
</beginFooter>
<!-- Java script-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
