<?php


namespace system\theme\Widgets;


use system\modules\blog\models\BlogArticles;
use yii\bootstrap\Widget;

class PapularArticles extends Widget
{
    public $limit = 3;

    public function run()
    {
        $html = <<<HTML
                <div class="offset-top-30">
HTML;

        $model = new BlogArticles();
        $model = $model->papulates();
        if (empty($model)) {
            return '';
        } else {
            foreach ($model as $item) {
                /**
                 * @var $model BlogArticles[]
                 */
                $image = $item->getdefaultImageLink('70*70');
                $title = $item->title;
                $slug = \system\modules\slug\models\Slug::getSlug($item);
                if (!empty($slug)) {
                    $link = \Yii::$app->urlManager->createUrl(['/' . $slug]);
                } else {
                    $link = \Yii::$app->urlManager->createUrl(['/article/' . $item->id]);
                }
                $date = \Yii::$app->functions->convertdate($item->created_at);
                $html .= <<<HTML
<div class="unit unit-horizontal unit-spacing-xs offset-top-10">
                                <div class="unit-left">
                                        <img src="{$image}" alt="{$title}" class="img-rounded" width="70" height="70">
                                </div>
                                <div class="unit-body">
                                    <a href="{$link}" class="link-default">
                                                        {$title}
                                    </a>
                                    <div class="post-info">
                                        <time datetime="{$item->created_at}">{$date}</time>
                                        <span>/</span> <span>{$item->commentCount}</span>
                                    </div>
                                </div>
                        </div>    
HTML;

            }
            $html .='</div>';
            return $html;
        }

    }
}
