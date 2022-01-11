<?php
use yii\helpers\Html;
use common\widgets\Alert;
use YiiMan\YiiBasics\lib\i18n\Layout;

?>
<head>
    <?php require_once __DIR__ . '/metatags.php' ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="shortcut icon" href="<?= Yii::$app->Options->getFileResized('logo','50*50') ?>"
          type="image/x-icon"/>


    <script src="<?= $baseUrl ?>/frontend/assets/js/jquery.min.js?ver=<?= Yii::$app->Develop->assetVersion() ?>"></script>

    <link rel="stylesheet" href="<?= $baseUrl ?>/frontend/assets/css/reset.css?ver=<?= Yii::$app->Develop->assetVersion() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>/frontend/assets/css/plugins.css?ver=<?= Yii::$app->Develop->assetVersion() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>/frontend/assets/css/style.css?ver=<?= Yii::$app->Develop->assetVersion() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>/frontend/assets/css/dark.css?ver=<?= Yii::$app->Develop->assetVersion() ?>">

    <?php
    if (Layout::run() == 'rtl') {
        ?>
        <link rel="stylesheet" href="<?= $baseUrl ?>/frontend/assets/css/rtl.css?ver=<?= Yii::$app->Develop->assetVersion() ?>">
        <?php
    }
    ?>
    <script>
        // < System Parameters >
        {
            var isRtl=<?= Layout::run()=='rtl' ?>;
        }
        // </ System Parameters >
    </script>
</head>
<?= Alert::widget() ?>
