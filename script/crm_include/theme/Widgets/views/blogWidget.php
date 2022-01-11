<?php
/**
 * @var $this \system\lib\View
 * @var $model \common\models\Works[]
 */


?>

<div class="background-slider afterbackimage">
    <?php
    if (!empty($model)) {
        foreach ($model as $key => $item) {
            ?>
            <div class=" <?= $key==0?'active':''?>" style="background-image:url(<?= $item['image'] ?>)"></div>

            <?php
        }
    }
    ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <ul class="slider"
                data-options="type:slider,nav:true,arrows:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out,direction:<?= \system\lib\i18n\Layout::run() ?>">
                <?php
                if (!empty($model)) {
                    foreach ($model as $item) {

                        ?>
                        <li>
                            <a href="<?= $item['link'] ?> " class="media-box media-box-reveal" data-anima="scale"
                               data-trigger="hover">
                                <img class="anima"
                                     src="<?=Yii::$app->UploadManager->getFitFromUrl($item['image'],'blog/images' , '800*1300', 'top') ?>"
                                     alt="">
                                <div class="caption">
                                    <p>
                                        <?= $item['text'] ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="col-lg-6" data-anima="fade-left" data-time="2000">
            <?= \system\modules\widget\models\Widget::getWidget('homeBlogSection') ?>

        </div>
    </div>
</div>
