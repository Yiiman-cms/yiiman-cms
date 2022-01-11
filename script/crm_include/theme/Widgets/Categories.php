<?php


namespace system\theme\Widgets;


use system\modules\blog\models\BlogCategory;
use yii\bootstrap\Widget;

class Categories extends Widget
{
    public $limit = 4;
    public $showCount = false;

    public function run()
    {
        $model = BlogCategory::find()
            ->limit($this->limit)
            ->all();
        if (!empty($model)) {
            /**
             * @var $model BlogCategory[]
             */
            $html = '<ul class="list list-marked list-marked-burnt-sienna list-bordered offset-top-10">
';
            foreach ($model as $item) {
                if ($this->showCount) {
                    $count = '<span class="text-gray-light">(' . $item->getArticleCount() . ')</span>';
                } else {
                    $count = '';
                }

                $html .= '<li><a href="' . \Yii::$app->urlManager->createUrl(['/category/' . $item->id]) . '" class="link-default">' . $item->title . $count . ' </a>';
            }
            $html .= '</ul>';
            return $html;
        } else {
            return '';
        }

    }
}
