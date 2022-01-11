<?php
/**
 * @var $this \system\lib\View
 * @var $cat \system\modules\blog\models\BlogCategory
 * @var $articles string
 */
$this->title = $cat->title;
?>
<section class="section-50 section-sm-100">
    <div class="shell">
        <div class="range range-md-center range-lg-right">
            <div class="cell-md-9">
                <!-- Blog Classic-->
                <?php
                $topW = \system\modules\widget\models\Widget::getWidget('CategoryRightTop');
                if ($topW){
                    ?>
                    <section>
                        <?= $topW ?>
                    </section>
                <?php
                }
                ?>
                <section>
                    <?= $articles ?>
                </section>
                <?php
                $topW = \system\modules\widget\models\Widget::getWidget('CategoryRightBottom');
                if ($topW){
                    ?>
                    <section>
                        <?= $topW ?>
                    </section>
                    <?php
                }
                ?>
            </div>
            <div class="cell-md-3 offset-top-100 offset-md-top-0">
                <!-- Section Blog Modern-->
                <aside class="text-left">
                    <!-- Search Form-->
                    <!-- RD Search Form-->
                    <?php $t= \system\modules\widget\models\Widget::getWidgetTitle('CategoryLeftTop');
                    if (!empty($t)){
                        ?>
                        <div class="h6 offset-top-50 text-uppercase"><?= $t ?></div>
                    <?php
                    }
                    ?>
                    <?= \system\modules\widget\models\Widget::getWidget('CategoryLeftTop') ?>

                    <div class="range offset-top-55">
                        <div class="cell-xs-6 cell-md-12">
                            <!-- Category-->
                            <div class="h6 text-uppercase"><?= \system\modules\widget\models\Widget::getWidgetTitle('CategoryLeftMiddle') ?></div>
                            <?= \system\modules\widget\models\Widget::getWidget('CategoryLeftMiddle') ?>
                        </div>
                        <div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
                            <!-- Archive-->
                            <div class="h6 text-uppercase"><?= \system\modules\widget\models\Widget::getWidgetTitle('CategoryLeftBottom') ?></div>
                            <div class="offset-top-30">
                               <?= \system\modules\widget\models\Widget::getWidget('CategoryLeftBottom') ?>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
