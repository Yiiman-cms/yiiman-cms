<?php

/**
 * @var $this \system\lib\View
 * @var $model \system\modules\blog\models\BlogArticles
 */
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'مقالات'), 'url' => ['/articles']];
$this->params['breadcrumbs'][] = $this->title;

// < Generate Share Links >
{

    $defaultPic = $model->loadDefaultImage();

    Yii::$app->ShareLinks->body = Yii::$app->functions->limitText(\system\modules\parameters\models\Parameters::filter($model->content), 60);
    Yii::$app->ShareLinks->title = $model->title;
    if (!empty($defaultPic)) {
        Yii::$app->ShareLinks->image = Yii::$app->UploadManager->getFit('dl/BlogArticles', $defaultPic->file_name . $defaultPic->extension, '870*412');
    }
}
// </ Generate Share Links >

$papulates = $model->papulates();
?>
<div class="content">
    <section>
        <!-- section number     -->
        <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);"
             data-bottom-top="transform: translateY(-200px);"><span><?= \Yii::t('site','مقاله') ?></span></div>
        <!-- section number   end -->
        <!--  container  -->
        <div class="container">
            <div class="shell">
                <div class="row">
                    <div class="cell-md-9">
                        <!-- Blog Default Single-->
                        <section>
                            <article class="post post-classic">

                                <!-- Post media-->

                                <!-- Post content-->
                                <section class="post-content text-left offset-top-25">
                                    <?= \system\modules\parameters\models\Parameters::filter($model->content) ?>
                                </section>
                            </article>
                            <hr class="offset-top-50">
                            <?= \system\modules\widget\models\Widget::getWidget('PostBottomArticle') ?>

                            <div class="offset-top-41">
                                <?php \YiiMan\YiiBasics\widgets\nestedItems\NestedItems::widget(
                                    [
                                        'dataModel' => \system\modules\blog\models\BlogComment::find()->where(['article' => $model->id, 'status' => $model::STATUS_ACTIVE])->all(),
                                        'parent_attribute' => 'parent',
                                        'nestedLimit' => 2,
                                        'fieldsCallbacks' =>
                                            [
                                                'image' => function ($id) {
                                                    return Yii::$app->UploadManager->getFit('dl/comments/', 'defaultImage.jpg', '60*60');
                                                },
                                                'left' => function ($created_at) {
                                                    return Yii::$app->functions->timeLeft($created_at);
                                                }
                                            ],
                                        'customFields' =>
                                            [
                                                'image' => 'article',
                                                'left' => 'created_at',
                                            ],
                                        'template' =>
                                            [
                                                'head' => '{items}',
                                                'item_head' => '
<!-- Box Comment-->
        <div class="box-comment text-left box-comment-outboxed">
            {item}
            <!-- Box Comment-->
        </div>',
                                                'item_body' => '
        <div class="media">
                <div class="media-left"><img src="{image}" alt="{name}" width="60"
                                             height="60" class="img-circle box-comment-img"></div>
                <div class="media-body">
                    <header class="box-comment-header unit unit-vertical unit-spacing-xs unit-md unit-md-horizontal unit-md-inverse unit-md-middle unit-md-align-right">
                        <div class="unit-left unit-grow-1">
                            <ul class="box-comment-meta list-inline list-inline-sm">
                                <li>
                                    <time datetime="{created_at}" class="text-middle">{left}</time>
                                    <span class="box-comment-icon mdi mdi-clock text-right"></span>
                                </li>
                                <li><a href="#reply" onclick="jQuery(\'#replyInput\').val( {id} );" class="link-gray-light"><span class="box-comment-icon mdi mdi-message-outline"></span>
                                        پاسخ</a></li>
                            </ul>
                        </div>
                        <div class="unit-body">
                            <p class="box-comment-title">{name}</p>
                        </div>
                    </header>
                    <section class="box-comment-body">
                        <p class="text-dark">{message}</p>
                    </section>
                </div>
            </div>
        {items}
        
',
                                                'item_with_child_head' => '
<div class="box-comment text-left box-comment-outboxed">
            <!-- Box Comment-->
            {items}
</div>
',
                                                'item_with_child_body' => null

                                            ]
                                    ]
                                ); ?>
                            </div>


<!--                            <form data-form-output="form-output-global" data-form-type="contact" method="post"-->
<!--                                  class="rd-mailform form-contact-line text-left form-comment">-->
<!---->
<!--                                <input type="hidden" id="replyInput" name="reply">-->
<!--                                <div class="range">-->
<!--                                    <div class="cell-md-4">-->
<!--                                        <div class="form-group">-->
<!--                                            <label for="contact-name-2"-->
<!--                                                   class="form-label form-label-outside">نام</label>-->
<!--                                            <input id="contact-name-2" type="text" placeholder="نام خود را وارد کنید"-->
<!--                                                   name="name" data-constraints="@Required" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label for="contact-email-2"-->
<!--                                                   class="form-label form-label-outside text-left">ایمیل</label>-->
<!--                                            <input id="contact-email-2" type="email"-->
<!--                                                   placeholder="ایمیل خود را وارد کنید"-->
<!--                                                   name="email" data-constraints="@Email @Required"-->
<!--                                                   class="form-control">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="cell-md-8">-->
<!--                                        <div class="form-group">-->
<!--                                            <label for="message" class="form-label form-label-outside">دیدگاه-->
<!--                                                شما</label>-->
<!--                                            <textarea id="message" placeholder="دیدگاه خود را وارد کنید" name="message"-->
<!--                                                      data-constraints="@Required" class="form-control"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="offset-top-35">-->
<!--                                    <button type="submit" class="btn btn-primary-lighter btn-min-width-sm">ثبت</button>-->
<!--                                </div>-->
<!--                            </form>-->
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
