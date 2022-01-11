<?php
	
	use YiiMan\YiiBasics\widgets\topMenu\TopMenuWidget;
	use yii\widgets\Breadcrumbs;
?>
<div class="content main">
    <div class="container-fluid">
        <div>
            <?= TopMenuWidget::widget() ?>

            <?=
            Breadcrumbs::widget(
                    [
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	                    'options' => ['class'=>'breadcrumb breadcrumb-container']
                    ]
            )
            ?>
        </div>
        <div class="content">

            <?php echo \common\widgets\Alert::widget() ?>
            <?= $content ?>
        </div>

       
    </div>
</div>


