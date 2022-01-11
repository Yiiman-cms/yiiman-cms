<?php


use YiiMan\YiiBasics\modules\parameters\models\Parameters; ?>
<!-- header start  -->
<header class="main-header">
    <!-- logo   -->
    <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>" class="logo-holder ajax"><img src="<?= Yii::$app->Options->logo ?>" alt=""></a>
    <!-- logo end  -->
    <!--nav-button-wrap -->
    <div class="nav-button-wrap">
        <div class="nav-button"><span></span><span class="nos"></span><span class="ncs"></span></div>
        <span class="nav-button-wrap_subtitle">منو</span>
    </div>
    <!-- nav-button-wrap end-->
    <!-- page-subtitle -->
    <div class="page-subtitle"><span></span></div>
    <!-- page-subtitle end  -->
    <div class="share-btn showshare htv"><i class="far fa-share-alt"></i><span class="header-tooltip">اشتراک گذاری</span></div>
    <!--header-contacts-->
    <div class="header-contacts">
        <ul>
            <li><a href="tel:<?= Parameters::getParameter('phone') ?>"> <span>تماس :</span> <?= Parameters::getParameter('phone') ?></a></li>
            <li><a href="mailto:<?= Parameters::getParameter('email') ?>"> <span>نامه نگاری :</span> <?= Parameters::getParameter('email') ?></a></li>
        </ul>
    </div>
    <!-- header-contacts end -->
</header>
<!-- header end -->
