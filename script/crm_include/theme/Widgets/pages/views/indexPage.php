<?php

/**
 * @var $this \system\lib\View
 * @var $products \system\modules\product\models\Product[]
 * @var $model \system\modules\product\models\Product
 */


?>
<!-- fw-carousel-wrap -->
<div class="fw-carousel-wrap fsc-holder">
    <!-- fw-carousel  -->
    <div class="fw-carousel  fs-gallery-wrap vis-thumb-info vis-thumb-info2  fl-wrap full-height lightgallery"
         data-mousecontrol="true">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="first-slide_dec"><i class="fal fa-arrow-right"></i></div>

                <?php
                if (!empty($products)) {
                    $isfirst=true;
                    foreach ($products as $model) {
                        $img=$model->loadDefaultImage();
                        ?>
                        <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom  <?= $isfirst?'first-slide':'' ?>">
                            <img src="<?= Yii::$app->Options->UploadUrl.'/dl/product/'.$img->file_name.$img->extension ?>" alt="">
                            <a href="<?= Yii::$app->Options->UploadUrl.'/dl/product/'.$img->file_name.$img->extension ?>" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="<?= !empty($slug=\system\modules\slug\models\Slug::getSlug($model))?Yii::$app->urlManager->createUrl(['/'.$slug]):Yii::$app->urlManager->createUrl(['/product/'.$model->hash]) ?>" class="ajax"><?= $model->title ?></a></h3>
                                <p><?= $model->sub_title ?></p>
                            </div>
                            <div class="hiddec-anim"></div>
                        </div>
                        <!-- swiper-slide end-->
                        <?php
                        $isfirst=false;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- fw-carousel end -->
</div>
<!--slider-counter-->
<!--slider-counter end-->
<!--bottom-panel-->
<div class="bottom-panel bot-element">
    <div class="bottom-panel-column bottom-panel-column_left">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>تصاویر را به راست و چپ بکشید</span>
        </div>
        <div class="fs-controls_wrap">
            <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-angle-left"></i></div>
            <div class="fw_cb fw-carousel-button-next"><i class="fal fa-angle-right"></i></div>
        </div>
        <div class="fw-carousel-counter"></div>
    </div>
    <div class="bottom-panel-column bottom-panel-column_right">
        <div class="half-scrollbar">
            <div class="hs_init"></div>
        </div>
    </div>
</div>
<!--bottom-panel end-->
