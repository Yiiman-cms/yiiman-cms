<?php

/**
 * @var $this View
 * @var $model Posttypes
 */

use YiiMan\YiiBasics\lib\View;
use YiiMan\YiiBasics\modules\posttypes\models\Posttypes;
use YiiMan\YiiBasics\widgets\multiRowInput\assets\FontAwesomeAsset;

FontAwesomeAsset::register($this);
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'نمونه کارها'), 'url' => ['/works']];
$this->params['breadcrumbs'][] = $this->title;

// < Generate Share Links >
{

    $defaultPic = $model->loadDefaultImage();


}
// </ Generate Share Links >


?>
<style>
    .defaultImage {

    }

    .album-item:not(.active) {
        display: block !important;
        opacity: 1 !important;
    }

    .cnt-album-box, .album.active .album-list {
        display: block !important;
    }

    .coders {
        margin-top: -51px;
        margin-bottom: 27px;
    }
</style>
<main>
    <section class="section-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-right coders"><?= \Yii::t('site','معرفی پروژه') ?></h2>
                    <?= $model->description ?>
                    <hr class="space-sm"/>
                    <hr class="space-xs"/>
                </div>
                <div class="col-lg-6">

                    <?php
                    $programmers = $model->programmer0;
                    if (!empty($programmers)) {
                        ?>
                        <h2 class="text-right coders"><?= \Yii::t('site','توسعه دهندگان') ?></h2>
                        <ul class="slider"
                            data-options="type:carousel,nav:false,perView:1,perViewLg:1,perViewSm:1,gap:30,controls:out<?= count($programmers)>1?',autoplay:3000':'' ?>,direction:<?= \system\lib\i18n\Layout::run() ?>">

                            <?php
                            foreach ($programmers as $item) {
                                ?>
                                <li>
                                    <div class="cnt-box cnt-box-side">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['/profile/' . $item->id]) ?>"
                                           class="img-box">
                                            <img src="<?= $item->getdefaultImageLink('450*450') ?>"
                                                 alt="<?= $item->title ?>"/>
                                        </a>
                                        <div class="caption">
                                            <h2><?= $item->title ?></h2>
                                            <span class="extra-field"><?= $item->title ?></span>
                                            <p>
                                                <?= $item->semat ?>
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="space-sm"/>
                                    <table class="table table-grid table-border align-left text-bold table-10">
                                        <tbody>
                                        <tr>
                                            <td><?= \Yii::t('site', 'سابقه ی فعالیت') ?>
                                                <p><?= $item->yearsWork . ' سال' ?></p></td>
                                            <td>

                                                <div class="icon-links icon-social icon-links-grid social-colors">
                                                    <?php
                                                    if (!empty($item->call)) {
                                                        foreach ($item->call as $row) {
                                                            ?>
                                                            <a href="<?= $row['url'] ?>" class="facebook"><i
                                                                        class=" <?= $row['icon'] ?>"></i></a>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section-image light" data-parallax="scroll" data-bleed="100"
             data-image-src="<?= $model->getdefaultImageLink('1920*1080') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter counter-vertical counter-icon">
                        <div>
                            <h3><?= \Yii::t('site', 'تاریخ اجرا') ?></h3>
                            <p class="text-50 text-black no-margin"><?= $model->time ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div>
                        <h3><?= \Yii::t('site', 'مکان کارفرما') ?></h3>
                        <p class="text-50 text-black no-margin"><?= $model->location ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div>
                        <h3><?= \Yii::t('site', 'فریم ورک') ?></h3>
                        <p class="text-50 text-black no-margin"><?= $model->framework ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div>
                        <h3><?= \Yii::t('site', 'نوع اجرا') ?></h3>
                        <p class="text-50 text-black no-margin"><?= $model->mode ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-base">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2><?= \system\modules\widget\models\Widget::getWidgetTitle('ProjectSide') ?></h2>
                    <?= \system\modules\widget\models\Widget::getWidget('ProjectSide') ?>
                </div>
                <div class="col-lg-6">
                    <ul class="text-list text-list-line">
                        <?php
                        if (!empty($model->technical)) {
                            foreach ($model->technical as $row) {
                                ?>
                                <li>
                                    <b><?= $row['description'] ?></b>
                                    <hr/>
                                    <p><?= $row['name'] ?></p>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <hr class="space"/>
        </div>
    </section>
    <section class="section-base " style="background: rgb(2,0,36);
background: linear-gradient(70deg, rgb(16, 4, 28) 0%, rgb(4, 4, 30) 35%, rgb(20, 2, 28) 100%)">
        <div class="container">
            <div class="album" data-album-anima="fade-bottom" data-columns-md="2" data-columns-sm="1">

                <div class="cnt-album-box">
                    <div class="album-item">
                        <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3"
                             data-columns-md="2">
                            <div class="grid-box">
                                <?php
                                foreach ($model->loadDefaultImages('image') as $link) {
                                    ?>
                                    <div class="grid-item">
                                        <a class="img-box"
                                           href="<?= Yii::$app->Options->UploadUrl . '/dl/Posttypes/' . $link->file_name . $link->extension ?>">
                                            <img src="<?= Yii::$app->UploadManager->getFit('/dl/Posttypes/', $link->file_name . $link->extension, '800*500') ?>"
                                                 alt=""/>
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                            <div class="list-pagination">
                                <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
        if ($videos=$model->loadAttachments('video','image')){
            ?>
            <section class="section-base section-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="title">
                                <h2><?=   \Yii::t('site','ویدیو ها')  ?></h2>
                                <p><?=    \Yii::t('site','معرفی ویدیویی پروژه')  ?></p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="slider" data-options="type:carousel,nav:true,perView:3,perViewSm:2,perViewXs:1,gap:30,controls:out,<?= count($programmers)>1?',autoplay:3000':'' ?>,direction:<?= \system\lib\i18n\Layout::run() ?>">
                                <?php
                                       foreach ($videos as $v){

//                                           $frame = 10;
//                                           $movie = Yii::$app->Options->UploadDir . '/dl/Posttypes/' . $v->file_name . $v->extension;
//                                           $thumbnail = Yii::$app->Options->UploadDir . '/dl/Posttypes/' . $v->file_name . 'thumb.jpg';
//
//                                           $mov = new ffmpeg_movie($movie);
//                                           $frame = $mov->getFrame($frame);
//                                           if ($frame) {
//                                               $gd_image = $frame->toGDImage();
//                                               if ($gd_image) {
//                                                   imagepng($gd_image, $thumbnail);
//                                                   imagedestroy($gd_image);
//                                                   $img=$thumbnail;
//                                               }
//                                           }

                                           ?>
                                           <li>
                                               <a class="img-box btn-video lightbox" href="<?=  Yii::$app->Options->UploadUrl . '/dl/Posttypes/' . $v->file_name . $v->extension ?>" data-lightbox-anima="fade-top">
                                                   <img src="<?= !empty($img)?Yii::$app->Options->UploadUrl . '/dl/Posttypes/' . $v->file_name . 'thumb.jpg':$model->getdefaultImageLink('500*800') ?>" alt="">
                                               </a>
                                           </li>
                                <?php
                                       }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
    <?php
        }
    ?>

    <?php

        if (!empty($model->url) && empty($model->doing)){
            ?>
            <section class="section-base section-color section-google-map">
                <div class="container">
                    <?php
                    if (!empty($model->url)) {
                        ?>
                        <div class="google-map">
                            <iframe src="<?= $model->url ?>" frameborder="0"></iframe>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <?php
        }elseif (!empty($model->doing) && $model->doing[0]=='expired'){
            ?>
            <section class="section-base section-color ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="coders" style="font-size: 30px;color: darkred">سایت این پروژه از دسترس خارج شده است</h4>
                            <p>اغلب پروژه های برنامه نویسی شده توسط شرکت های طراحی وب، شکست میخورند، این امر طبیعی است.</p>
                            <p>پروژه ی معرفی شده در این صفحه علیرغم میل باطنی ما، از دسترس خارج شده است، و این عدم دسترسی توسط کارفرما رقم خورده است.</p>
                            <br>
                            <p>معمولا از دسترس خارج شدن پروژه های انجام شده، چندین دلیل میتواند داشته باشد:</p>
                            <ul>
                                <li>شکست پروژه در بازار کار</li>
                                <li>عدم استقبال کاربران از ایده ی کارفرما</li>
                                <li>اتمام دوره ی طلایی بازار</li>
                                <li>تغییر قوانین کشور و غیرمجاز شدن کسب و کار</li>
                                <li>تغییرات درون سازمانی و تغییر استراتژی های کارفرما</li>
                            </ul>
                            <p style="color: darkgreen">چنانچه شما قصد دارید یک نمونه ی پیش نمایش از این پروژه را مشاهده نمایید، لطفا با ما تماس بگیرید.</p>
                        </div>
                        <div class="col-md-6">
                            <?= \YiiMan\YiiBasics\widgets\notFound\NotFoundWidget::widget(['withRowColumn' => false]) ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        }elseif(!empty($model->doing) && $model->doing[0]=='doing'){
            ?>
            <section class="section-base section-color ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="coders" style="font-size: 30px;color: darkred">سایت این پروژه در حال تولید میباشد</h4>
                            <p>پروژه های در حال تولید تا زمان اتمام کار در دسترس عموم قرار نخواهند گرفت</p>

                            <p style="color: darkgreen">چنانچه قصد مشاوره جهت انجام پروژه دارید با ما تماس بگیرید.</p>
                        </div>
                        <div class="col-md-6">
                            <?= \YiiMan\YiiBasics\widgets\notFound\NotFoundWidget::widget(['withRowColumn' => false]) ?>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        }
    ?>


</main>
