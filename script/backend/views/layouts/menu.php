<?php
/**
 * @var $assets      \yii\web\AssetBundle
 * @var $HomeRequest int
 * @var $Agencies    int
 * @var $Homes       int
 * @var $Reports     int
 */


use YiiMan\YiiBasics\modules\posttypes\models\Posttypes;
use \YiiMan\YiiBasics\modules\form\models\Form;
use YiiMan\YiiBasics\widgets\profile\ProfileWidget;

?>

<div class="sidebar" data-active-color="rose" data-background-color="black"
     data-image="<?= $image ?>">
    <div class="sidebar-container">
        <div class="logo"><a href="<?= $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'] ?>"
                             class="simple-text logo-mini">

            </a>

            <a href="<?= Yii::$app->Options->URL ?>" class="simple-text logo-normal">
                <?= Yii::$app->Options->siteTitle ?>
            </a></div>

        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <?= ProfileWidget::widget() ?>
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username collapsed" aria-expanded="false">
                    <span>
                       <?= Yii::$app->user->identity->email ?>
	                    <b class="caret"></b>
                    </span>
                    </a>
                    <div class="collapse" id="collapseExample" style="">
                        <ul class="nav">

                            <li class="nav-item  <?= \common\widgets\AdminMenuWidgets::activeMenu('/setting') ?>">
                                <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl('/setting') ?>">
                                    <span class="sidebar-mini"> <i class="material-icons">settings</i> </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
            $forms = Form::find()->select([
                'id',
                'title'
            ])->asArray()->all();
            $formArray = [];
            if (!empty($forms)) {
                foreach ($forms as $f) {
                    $formArray[] =
                        [
                            'url'   => '/form/form-inbox?formId='.$f['id'],
                            'label' => Yii::t('form', '???????? ?????? ??????????:').$f['title'],
                            'icon'  => 'dashboard',
                        ];
                }
            }
            $items = [
                [
                    'url'   => '/',
                    'label' => Yii::t('menu', '????????????'),
                    'icon'  => 'dashboard'
                ],
                [
                    'label' => Yii::t('menu', '??????????'),
                    'icon'  => 'dashboard',
                    'items' =>
                        [
                            [
                                'url'   => '/blog',
                                'label' => Yii::t('menu', '?????????? ????'),
                                'icon'  => 'dashboard',
                            ],
                            [
                                'url'   => '/blog/blog-categories',
                                'label' => Yii::t('menu', '???????? ????'),
                                'icon'  => 'dashboard',
                            ],

                            [
                                'url'   => '/blog/blog-comment',
                                'label' => Yii::t('menu', '???????????? ????'),
                                'icon'  => 'dashboard',
                            ],

                        ]
                ],
                [
                    'label' => Yii::t('menu', '?????? ????'),
                    'icon'  => 'dashboard',
                    'items' =>

                        \yii\helpers\ArrayHelper::merge([
                            [
                                'url'   => '/form',
                                'label' => Yii::t('menu', '?????? ????'),
                                'icon'  => 'dashboard',
                            ]
                        ], $formArray)
                    ,


                ],

                [
                    'label' => Yii::t('menu', '??????????'),
                    'icon'  => 'keyboard',
                    'items' =>
                        [
                            [
                                'url'   => '/language',
                                'label' => Yii::t('menu', '????????'),
                                'icon'  => 'keyboard',
                            ],
                            [
                                'url'   => '/menu',
                                'label' => Yii::t('menu', '??????'),
                                'icon'  => 'keyboard',
                            ],
                            [
                                'url'   => '/seo',
                                'label' => Yii::t('menu', '??????'),
                                'icon'  => 'keyboard'
                            ],
                            [
                                'url'   => '/useradmin',
                                'label' => Yii::t('menu', '?????????????? ????????'),
                                'icon'  => 'keyboard'
                            ],
                            [
                                'url'   => '/widget',
                                'label' => Yii::t('menu', '???????? ????'),
                                'icon'  => 'keyboard'
                            ],
                            [
                                'url'   => '/parameters',
                                'label' => \Yii::t('site', '?????????????? ????'),
                                'icon'  => 'keyboard'
                            ],
                            [
                                'label' => \Yii::t('site', '???????????? ????'),
                                'icon'  => 'keyboard',
                                'items' =>
                                    [
                                        [
                                            'url'   => '/rbac/permissions',
                                            'label' => \Yii::t('site', '???????????? ????'),
                                            'icon'  => 'keyboard'
                                        ],
                                        [
                                            'url'   => '/rbac/assignment',
                                            'label' => \Yii::t('site', '?????????? ????????????'),
                                            'icon'  => 'keyboard'
                                        ],
                                        [
                                            'url'   => '/rbac/role',
                                            'label' => \Yii::t('site', '??????'),
                                            'icon'  => 'keyboard'
                                        ],
                                        [
                                            'url'   => '/rbac/rule',
                                            'label' => \Yii::t('site', '2??????'),
                                            'icon'  => 'keyboard'
                                        ],

                                    ]
                            ]
                        ]
                ],
                [
                    'label' => Yii::t('menu', '??????????'),
                    'icon'  => 'keyboard',
                    'items' =>
                        [
                            [
                                'url'   => '/pages/default/create',
                                'label' => Yii::t('menu', '???????? ????????'),
                                'icon'  => 'keyboard',
                            ],
                            [
                                'url'   => '/pages',
                                'label' => Yii::t('menu', '?????? ?? ??????????'),
                                'icon'  => 'keyboard',
                            ],

                        ]
                ],
                [
                    'label' => Yii::t('menu', '??????????????'),
                    'icon'  => 'keyboard',
                    'items' =>
                        [
                            [
                                'url'   => '/product/default',
                                'label' => Yii::t('menu', '??????????????'),
                                'icon'  => 'keyboard',
                            ],
                            [
                                'url'   => '/product/product-category',
                                'label' => Yii::t('menu', '???????? ??????????????'),
                                'icon'  => 'keyboard',
                            ],

                        ]
                ],

            ];
            // < Post Types >
            {

                $ptArray = [];
                if (!empty(Posttypes::getConfigs())) {
                    $items = array_merge($items, Posttypes::getConfigs()['menus']);
                }
            }
            // </ Post Types >
            echo \common\widgets\AdminMenuWidgets::widget(['items' => $items])
            ?>

        </div>
    </div>
</div>
