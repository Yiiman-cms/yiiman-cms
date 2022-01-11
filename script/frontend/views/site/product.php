<?php
/**
 * @var $this \system\lib\View
 * @var $model \system\modules\product\models\Product
 */

$images = $model->loadDefaultImages();
$imgUrl = Yii::$app->Options->UploadUrl . '/dl/product/';
?>
<style>
    .pr-det-container h1 {
        text-align: right;
        font-size: 24px;
        font-weight: 700;
        float: left;
        width: 100%;
        padding-bottom: 40px;
        position: relative;
        color: white;
    }

    article {
        font-size: 13px;
        line-height: 24px;
        padding-bottom: 10px;
        font-weight: 500;
        color: #fff;
        text-align: right;
    }

</style>

<div class="content full-height ch  hidden-item no-mob-hidden" data-pagetitle="Portfolio single">
    <!-- fw-carousel-wrap -->
    <div class="fw-carousel-wrap fsc-holder single_project_carousel">
        <!-- fw-carousel  -->
        <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery thumb-contr" data-mousecontrol="true">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if (!empty($images)) {
                        foreach ($images as $image) {
                            /**
                             * @var $image \system\modules\gallery\models\GalleryMedias
                             */
                            $img = $imgUrl . $image->file_name . $image->extension;

                            ?>
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img src="<?= $img ?>" alt="">
                                <a href="<?= $img ?>" class="box-media-zoom   popup-image">
                                    <i class="fal fa-search"></i>
                                </a>
                                <div class="hiddec-anim"></div>
                            </div>
                            <!-- swiper-slide end-->
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- fw-carousel end -->
    </div>
    <!--bottom-panel-->
    <div class="bottom-panel bot-element bottom-panel_fw">
        <div class="show-info-btn   shibtn unvisthum2">اطلاعات محصول</div>
        <div class="half-scrollbar_wrap">
            <div class="half-scrollbar">
                <div class="hs_init"></div>
            </div>
            <div class="fw_scb fw-carousel-button-prev"><i class="fal fa-angle-left"></i></div>
            <div class="fw_scb fw-carousel-button-next"><i class="fal fa-angle-right"></i></div>
        </div>
        <div class="tumbnail-button show_thumbnails unvisthum">
            <div class="list">
                <div class="list-btn">
                                    <span>
                                    <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                                    <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                                    <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
                                    </span>
                </div>
            </div>
            <span class="thumbnail-tooltip">تصاویر بند انگشتی</span>
        </div>
    </div>
    <!--bottom-panel end-->
</div>
<!--content end-->
<!-- project details -->
<div class="det-overlay act-closedet"></div>
<div class="fix-pr-det hid-det hid-det-anim">
    <div class="act-closedet closedet_style det-anim"><i class="fal fa-times"></i></div>
    <div class="pr-det-container initscroll">
        <div class="fl-wrap det-anim">
            <h1><?= $model->title ?></h1>
            <span class="separator sep-b"></span>
            <div class="clearfix"></div>
            <article>
                <?= $model->description ?>
            </article>
        </div>
        <div class="caption-wrap fl-wrap det-anim">
            <ul>
                <li>
                    <span>Location</span>
                    <a href="#">NY , USA</a>
                </li>
                <li>
                    <span>Category</span>
                    <a href="#">Travel</a>
                </li>
                <li>
                    <span>Model</span>
                    <a href="#">Austin Onishe</a>
                </li>
                <li>
                    <span>Camera</span>
                    <a href="#">Canon 6d</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn fl-btn det-anim" target="_blank">View Project</a>
    </div>
</div>
<!-- project details  end-->
<!--thumbnail-container-->
<div class="thumbnail-container">
    <div class="thumbnail-wrap">
    </div>
</div>
<!--thumbnail-container end-->
<!--share-wrapper-->
<div class="share-wrapper">
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!--share-wrapper end-->
