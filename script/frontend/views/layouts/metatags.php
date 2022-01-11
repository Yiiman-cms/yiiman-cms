<?php
if (!empty(Yii::$app->controller) && !empty($model)) {//جهت جلوگیری از بروز خطا در صفحه ساز

    ?>
    <meta property="og:locale" content="<?= Yii::$app->Language->currentLanguageObject()->systemCode ?>"/>
    <meta property="og:type" content="website"/>
    <link rel="canonical" href="<?= Yii::$app->Options->URL ?>"/>
    <meta property="og:title" content="<?= Yii::$app->Options->siteTitle ?>|<?= $this->title ?>"/>
    <meta property="og:description" content="<?php

    if (!empty($model) && !empty($model->seo_description)) {
        echo $model->seo_description;
    }
    ?>"/>
    <meta property="og:url" content="<?= Yii::$app->Options->URL ?>"/>
    <meta property="og:site_name" content="<?= Yii::$app->Options->siteTitle ?>|<?= $this->title ?>"/>
    <meta property="og:image" content="<?= Yii::$app->Options->logo ?>"/>


    <meta property="description" content="<?php

    if (!empty($model) && !empty($model->seo_description)) {
        echo $model->seo_description;
    }
    ?>"/>
    <?php
}


?>

<meta name="format-detection" content="telephone=no">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="robots" content="index, follow"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">

<meta name="language" content="fa">

