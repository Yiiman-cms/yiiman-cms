<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <div class="alert alert-danger text-center">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        این یک صفحه ی خطاست، چنانچه این خطا را دوباره مشاهده نمودید لطفا به ما اطلاع دهید.
    </p>
    <p>
        <a href="" class="btn btn-success"></a>
    </p>
    <p></p>
</div>
