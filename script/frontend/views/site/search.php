<?php
/**
 * @var $this \system\lib\View
 */
$this->title = \Yii::t('site', 'جست و جو');
?>
<section class="text-left section-50 section-sm-top-100 section-sm-bottom-100">
    <div class="shell">
        <!-- RD Search-->
        <!-- RD Search Form-->
        <?php
        $topW = \system\modules\widget\models\Widget::getWidget('SearchTop');
        if ($topW) {
            ?>
            <section class="section-50 section-sm-100">
                <div class="shell">
                    <div class="range range-sm-center">
                        <div class="col-sm-10 col-md-8 col-lg-12">
                            <div class="range">
                                <?= $topW ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        ?>

        <form action="<?= Yii::$app->urlManager->createUrl(['/search']) ?>" method="GET" class="form-search rd-search">
            <div class="form-group">
                <label for="blog-sidebar-2-form-search-widget"
                       class="form-label form-search-label form-label-sm"><?= \Yii::t('site', 'جستجو') ?></label>
                <input id="blog-sidebar-2-form-search-widget" type="text"
                       value="<?= !empty($_GET['q']) ? $_GET['q'] : '' ?>" name="q" autocomplete="off"
                       class="form-search-input form-control ">
            </div>
            <button type="submit" class="form-search-submit"><span class="mdi mdi-magnify"></span></button>
        </form>

        <div class="rd-search-results offset-top-40 offset-sm-top-60">
            <section class="section-50 section-sm-100">
                <div class="shell">
                    <div class="range range-sm-center">
                        <div class="col-sm-10 col-md-8 col-lg-12">
                            <div class="range">
                                <?= $html ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $bottomW = \system\modules\widget\models\Widget::getWidget('SearchBottom');
            if ($bottomW) {
                ?>
                <section class="section-50 section-sm-100">
                    <div class="shell">
                        <div class="range range-sm-center">
                            <div class="col-sm-10 col-md-8 col-lg-12">
                                <div class="range">
                                    <?= $bottomW ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
            ?>


        </div>
    </div>
</section>
