<?php

/* @var $this yii\web\View */


use YiiMan\YiiBasics\lib\Core;
use YiiMan\YiiBasics\modules\hint\widgets\HintWidget;
use YiiMan\YiiBasics\widgets\adminCards\MiniStatCardWidget;

$this->title = 'داشبورد';

?>

<div class="site-index">

    <div class="jumbotron" style="margin-top: -73px;z-index: -1;">
        <?php
        if (!empty(Core::getDashboardStat())) {
            echo '<div class="row" style="margin-top: 50px">';
            foreach (Core::getDashboardStat() as $row) {
                echo '<div class="row" style="margin-top: 50px">';
                foreach ($row as $col) {
                    echo '<div class="col-md-'.$col['col'].'">';
                    if (empty($col['widget'])) {
                        switch (true) {
                            case empty($col['card']):
                                echo MiniStatCardWidget::widget(
                                    [
                                        'title'    => $col['title'],
                                        'icon'     => $col['icon'],
                                        'subtitle' =>
                                            !empty($col['condition']) ?
                                                $col['model']::find()
                                                    ->where($col['condition'])
                                                    ->count() :
                                                $col['model']::find()->count()
                                        ,
                                        'color'    => $col['color'],
                                        'unit'     => $col['unit']
                                    ]
                                );
                        }
                    }

                    echo '</div>';
                }
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
        <div class="row" style="margin-top: 50px">
            <?= HintWidget::widget() ?>
        </div>

        <div class="row" style="margin-top: 50px">
            <?php HintWidget::widget() ?>
        </div>


    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

            </div>
        </div>

    </div>
</div>
