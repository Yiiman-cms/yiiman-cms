<?php

/**
 * @var $this  \system\lib\View
 * @var $model \system\modules\pages\models\Pages
 * @var $tags  \system\modules\metadata\models\Metadata[]
 */
$this->title = $model->title;

use system\modules\pages\models\Pages;
use system\modules\testimotional\models\Testimotional;

?>


<?= \system\modules\parameters\models\Parameters::filter( $model->content )?>



