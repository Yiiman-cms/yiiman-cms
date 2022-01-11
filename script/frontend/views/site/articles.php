<?php
/**
 * @var $this \system\lib\View
 * @var $articles string
 */
$this->title =   \Yii::t('site','مقالات سایت') ;
?>
<div class="content">
    <section>
        <!-- section number     -->
        <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);"
             data-bottom-top="transform: translateY(-200px);"><span>03</span></div>
        <!-- section number   end -->
        <!--  container  -->
        <div class="container">



    <div class="shell">
        <div class="range range-md-center range-lg-right">
            <div class="cell-md-9">
                <!-- Blog Classic-->
                <?php
                $topW = \system\modules\widget\models\Widget::getWidget('ArticlesRightTop');
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
                $topW = \system\modules\widget\models\Widget::getWidget('ArticlesRightBottom');
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
                    <?php $t= \system\modules\widget\models\Widget::getWidgetTitle('ArticlesLeftTop');
                    if (!empty($t)){
                        ?>
                        <div class="h6 offset-top-50 text-uppercase"><?= $t ?></div>
                    <?php
                    }
                    ?>
                    <?= \system\modules\widget\models\Widget::getWidget('ArticlesLeftTop') ?>

                    <div class="range offset-top-55">
                        <div class="cell-xs-6 cell-md-12">
                            <!-- Category-->
                            <div class="h6 text-uppercase"><?= \system\modules\widget\models\Widget::getWidgetTitle('ArticlesLeftMiddle') ?></div>
                            <?= \system\modules\widget\models\Widget::getWidget('ArticlesLeftMiddle') ?>
                        </div>
                        <div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
                            <!-- Archive-->
                            <div class="h6 text-uppercase"><?= \system\modules\widget\models\Widget::getWidgetTitle('ArticlesLeftBottom') ?></div>
                            <div class="offset-top-30">
                               <?= \system\modules\widget\models\Widget::getWidget('ArticlesLeftBottom') ?>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

        </div>
    </section>
</div>
