<?php

use YiiMan\YiiBasics\modules\blog\models\BlogArticleFkCategory;
use YiiMan\YiiBasics\modules\blog\models\BlogArticles;
use YiiMan\YiiBasics\modules\blog\models\BlogCategory;
use YiiMan\YiiBasics\modules\blog\models\BlogComment;
use YiiMan\YiiBasics\modules\gallery\models\GalleryMedias;
use YiiMan\YiiBasics\modules\pages\models\Pages;
use YiiMan\YiiBasics\modules\parameters\models\Parameters;
use YiiMan\YiiBasics\modules\posttypes\models\Posttypes;
use YiiMan\YiiBasics\lib\Core;
use YiiMan\YiiBasics\modules\product\models\Product;
use YiiMan\YiiBasics\modules\slug\models\Slug;
use YiiMan\YiiBasics\modules\useradmin\models\User;
use YiiMan\YiiBasics\widgets\fontAwesomePicker\FontAwesomeFontPickerWidget;
use YiiMan\YiiBasics\widgets\multiRowInput\components\BaseColumn;

// < Theme Config >
{
// < Post Types >
    {
        Core::addPostTypes(
            [
                'menus' =>
                    [
                        [
                            'label' => Yii::t('menu', 'نمونه کارها'),
                            'icon'  => 'dashboard',
                            'items' =>
                                [
                                    [
                                        'url'   => '/pt/works',
                                        'label' => Yii::t('menu', 'مدیریت پروژه ها'),
                                        'icon'  => 'dashboard',
                                    ],

                                    [
                                        'url'   => '/pt/programmer',
                                        'label' => Yii::t('menu', 'برنامه نویس'),
                                        'icon'  => 'dashboard',
                                    ],

                                    [
                                        'url'   => '/pt/technology',
                                        'label' => Yii::t('menu', 'تکنولوژی'),
                                        'icon'  => 'dashboard',
                                    ],
                                    [
                                        'url'   => '/pt/work_category',
                                        'label' => Yii::t('menu', 'گروه پروژه ها'),
                                        'icon'  => 'dashboard',
                                    ],

                                ]
                        ],
                        [
                            'label' => Yii::t('menu', 'تستیموشنال'),
                            'icon'  => 'dashboard',
                            'url'   => '/pt/testimotional',
                        ],


                        [
                            'url'   => '/slider',
                            'label' => Yii::t('menu', 'اسلایدر'),
                            'icon'  => 'dashboard',
                        ],
                    ],
                'items' =>
                    [
                        'works'         =>
                            [
                                'labels'          =>
                                    [
                                        'sum'    => 'نمونه کارها',
                                        'single' => 'نمونه کار',
                                        'title'  => 'عنوان نمونه کار'
                                    ],
                                'options'         =>
                                    [
                                        'hasPicture' => true
                                    ],
                                'fields'          =>
                                    [
                                        'description' =>
                                            [
                                                'label' => 'توضیحات',
                                                'type'  => Posttypes::INPUT_TEXTAREA,
                                                'col'   => 12
                                            ],
                                        'sideCard-1'  =>
                                            [
                                                'label' => 'تکمیلی',

                                                'type'      => Posttypes::INPUT_CARD,
                                                'time'      =>
                                                    [
                                                        'label' => 'سال انجام',
                                                        'type'  => Posttypes::INPUT_NUMBER,
                                                        'col'   => 12
                                                    ],
                                                'location'  =>
                                                    [
                                                        'label' => 'مکان کارفرما',
                                                        'type'  => Posttypes::INPUT_TEXT,
                                                        'col'   => 12
                                                    ],
                                                'karfarma'  =>
                                                    [
                                                        'label' => 'کارفرما',
                                                        'type'  => Posttypes::INPUT_TEXT,
                                                        'col'   => 12
                                                    ],
                                                'url'       =>
                                                    [
                                                        'label' => 'آدرس سایت',
                                                        'type'  => Posttypes::INPUT_TEXT,
                                                        'col'   => 12
                                                    ],
                                                'framework' =>
                                                    [
                                                        'label' => 'سی ام اس',
                                                        'type'  => Posttypes::INPUT_TEXT,
                                                        'col'   => 12
                                                    ],

                                                'duration' =>
                                                    [
                                                        'label' => 'طول اجرا(ماه)',
                                                        'type'  => Posttypes::INPUT_NUMBER,
                                                        'col'   => 12
                                                    ],
                                                'doing'    =>
                                                    [
                                                        'label' => 'وضعیت کار',
                                                        'type'  => Posttypes::INPUT_CHECKBOX,
                                                        'data'  => [
                                                            'doing'   => 'در حال انجام',
                                                            'expired' => 'تعطیل شده'
                                                        ],
                                                        'col'   => 12
                                                    ],

                                                'mode' =>
                                                    [
                                                        'label' => 'نوع اجرای کار',
                                                        'type'  => Posttypes::INPUT_SELECT,
                                                        'col'   => 12,
                                                        'data'  =>
                                                            [
                                                                'ساعتی'    => 'ساعتی',
                                                                'پروژه ای' => 'پروژه ای'
                                                            ]
                                                    ],


                                            ],
                                        'sideCard-2'  =>
                                            [
                                                'label' => 'گروه بندی',
                                                'type'  => Posttypes::INPUT_CARD,

                                                'programmer'    =>
                                                    [
                                                        'label' => 'کدنویس',
                                                        'type'  => Posttypes::INPUT_MULTI_SELECT,
                                                        'data'  => function ($model) {
                                                            $posts = Posttypes::getPosts('programmer');
                                                            if (!empty($posts)) {
                                                                return \yii\helpers\ArrayHelper::map($posts, 'id',
                                                                    'title');
                                                            } else {
                                                                return [];
                                                            }
                                                        },
                                                        'col'   => 12
                                                    ],
                                                'work_category' =>
                                                    [
                                                        'type'  => Posttypes::INPUT_MULTI_SELECT,
                                                        'label' => 'گروه پروژه',
                                                        'col'   => 12,
                                                        'data'  => function () {
                                                            $posts = Posttypes::getPosts('work_category');
                                                            if (!empty($posts)) {
                                                                return \yii\helpers\ArrayHelper::map($posts, 'id',
                                                                    'title');
                                                            } else {
                                                                return [];
                                                            }
                                                        }
                                                    ]
                                            ],

                                        'technical' =>
                                            [
                                                'label'  => 'تکنولوژی ها',
                                                'type'   => Posttypes::INPUT_MULTIPLE,
                                                'fields' =>
                                                    [
                                                        'name'        =>
                                                            [
                                                                'label' => 'نام تکنولوژی',
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT
                                                            ],
                                                        'description' =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'توضیح خیلی گوتاه'
                                                            ]

                                                    ]
                                            ],
                                        'position'  =>
                                            [
                                                'label' => 'وضعیت نمایش در صفحات مختلف',
                                                'type'  => Posttypes::INPUT_CHECKBOX,
                                                'data'  =>
                                                    [
                                                        'home'       => 'در صفحه ی خانه',
                                                        'sliderHome' => 'در اسلاید بالای صفحه ی خانه'
                                                    ],
                                                'col'   => 4,
                                            ]
                                    ],
                                'indexAttributes' =>
                                    [

                                    ],
                                'description'     => 'توضیحات تست',
                            ],
                        'work_category' =>
                            [
                                'labels'          =>
                                    [
                                        'sum'    => 'گروه های پروژه',
                                        'single' => 'گروه پروژه',
                                        'title'  => 'عنوان گروه'
                                    ],
                                'options'         =>
                                    [
                                        'hasPicture' => true
                                    ],
                                'fields'          =>
                                    [

                                    ],
                                'indexAttributes' =>
                                    [

                                    ],
                                'description'     => 'توضیحات تست',
                            ],
                        'programmer'    =>
                            [
                                'labels'          =>
                                    [
                                        'sum'    => 'پرسنل',
                                        'single' => 'کارمند',
                                        'title'  => 'نام پرسنل'
                                    ],
                                'options'         =>
                                    [
                                        'hasPicture' => true
                                    ],
                                'fields'          =>
                                    [
                                        'semat'     =>
                                            [
                                                'label' => 'سمت',
                                                'type'  => Posttypes::INPUT_TEXT,
                                                'col'   => 6
                                            ],
                                        'tahsilat'  =>
                                            [
                                                'label' => 'تحصیلات',
                                                'type'  => Posttypes::INPUT_TEXT,
                                                'col'   => 6
                                            ],
                                        'abilities' =>
                                            [
                                                'type'   => Posttypes::INPUT_MULTIPLE,
                                                'label'  => 'توانایی ها',
                                                'fields' =>
                                                    [
                                                        'technology' =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_DROPDOWN,
                                                                'label' => 'تکنولوژی',
                                                                'data'  => function () {
                                                                    $techs = Posttypes::getPosts('technology');
                                                                    if (!empty($techs)) {
                                                                        \yii\helpers\ArrayHelper::map($techs, 'id',
                                                                            'title');
                                                                    } else {
                                                                        return [];
                                                                    }
                                                                }
                                                            ],
                                                        'percent'    =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'میزان توانایی',
                                                            ],
                                                    ]
                                            ],
                                        'call'      =>
                                            [
                                                'type'   => Posttypes::INPUT_MULTIPLE,
                                                'label'  => 'راه های ارتباطی',
                                                'fields' =>
                                                    [
                                                        'icon'  =>
                                                            [
                                                                'type'  => FontAwesomeFontPickerWidget::className(),
                                                                'label' => 'آیکون',

                                                            ],
                                                        'title' =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'عنوان',
                                                            ],
                                                        'url'   =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'آدرس سایت',
                                                            ],
                                                    ]
                                            ],
                                        'history'   =>
                                            [
                                                'type'   => Posttypes::INPUT_MULTIPLE,
                                                'label'  => 'سابقه',
                                                'fields' =>
                                                    [
                                                        'name'  =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'نام مرکز',
                                                            ],
                                                        'from'  =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'سال آغاز به کار'
                                                            ],
                                                        'to'    =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'سال پایان کار'
                                                            ],
                                                        'semat' =>
                                                            [
                                                                'type'  => BaseColumn::TYPE_TEXT_INPUT,
                                                                'label' => 'سمت'
                                                            ],
                                                    ]
                                            ],
                                        'yearsWork' =>
                                            [
                                                'type'  => Posttypes::INPUT_NUMBER,
                                                'label' => 'سابقه ی فعالیت(سال)',
                                                'col'   => 6
                                            ],

                                    ],
                                'indexAttributes' =>
                                    [

                                    ],
                                'description'     => 'توضیحات تست',
                            ],
                        'technology'    =>
                            [
                                'labels'          =>
                                    [
                                        'sum'    => 'زبان های کدنویسی',
                                        'single' => 'زبان',
                                        'title'  => 'نام زبان'
                                    ],
                                'options'         =>
                                    [
                                        'hasPicture' => true
                                    ],
                                'fields'          =>
                                    [
                                        'description' =>
                                            [
                                                'label' => 'توضیحات',
                                                'type'  => Posttypes::INPUT_FROALA,
                                                'col'   => 12
                                            ],

                                    ],
                                'indexAttributes' =>
                                    [

                                    ],
                                'description'     => 'توضیحات تست',
                            ],
                        'testimotional' =>
                            [
                                'labels'          =>
                                    [
                                        'sum'    => 'تستیموشنال ها',
                                        'single' => 'تستیموشنال',
                                        'title'  => 'نام مخاطب'
                                    ],
                                'options'         =>
                                    [
                                        'hasPicture' => true
                                    ],
                                'fields'          =>
                                    [
                                        'description' =>
                                            [
                                                'label' => 'توضیحات',
                                                'type'  => Posttypes::INPUT_TEXTAREA,
                                                'col'   => 12
                                            ],
                                        'semat'       =>
                                            [
                                                'label' => 'سمت',
                                                'type'  => Posttypes::INPUT_TEXT,
                                                'col'   => 12
                                            ],


                                    ],
                                'indexAttributes' =>
                                    [

                                    ],
                                'description'     => 'توضیحات تست',
                            ]

                    ],

            ]
        );

    }
// </ Post Types >

    Core::setMenuUrlHint(
        <<<HTML
<p>صفحه ی مقالات:</p>
<a style="direction: ltr;text-align: left;display: block;" href="/articles">/articles</a>

HTML

    );

    // < Locations >
    {
        Core::addMenuLocations(
            [
                1 => Yii::t('site', 'بالا'),
            ]
        );
        Core::AddThemeLocations(
            [
                'footerRight'   => 'فوتر، ستون راست',
                'footerCenter'  => 'فوتر، ستون وسط',
                'footerLeft'    => 'فوتر، ستون چپ',
                'footerBottom'  => 'فوتر، پایینی',
                'ProjectSide'   => 'ساید پروژه',
                'ProjectBottom' => 'پایین'

            ]
        );
    }
    // </ Locations >


    // < Parameters >
    {
        Core::addParameters(
            [
                [
                    'key'         => 'phone',
                    'description' => 'شماره تماس 1',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'phoneCall',
                    'description' => 'شماره تماس 2',
                    'val'         => 0,
                    'private'     => 0
                ],

                [
                    'key'         => 'email',
                    'description' => 'آدرس ایمیل',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'letterAddress',
                    'description' => 'ادرس صندوق پستی',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'address',
                    'description' => 'ادرس شرکت',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'instagram',
                    'description' => 'اینستاگرام',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'telegram',
                    'description' => 'تلگرام',
                    'val'         => 0,
                    'private'     => 0
                ],
                [
                    'key'         => 'whatsapp',
                    'description' => 'واتساپ',
                    'val'         => 0,
                    'private'     => 0
                ],


                [
                    'key'         => 'footerDescription',
                    'description' => 'متن توضیحات فوتر(زیر لوگو نمایش داده میشود)',
                    'val'         => 0,
                    'private'     => 0,
                    'editor'      => 1
                ],


                // < Functions >
                [
                    'key'         => 'url',
                    'val'         => function ($url) {
                        return Yii::$app->urlManager->createUrl([$url]);
                    },
                    'function'    => true,
                    'private'     => 0,
                    'description' => \Yii::t('parameters',
                        'این یک تابع است که برای قرار دادن URL مطابق با استانداردهای سیستم استفاده میشود، در صورتی که قصد دارید ارجاعی به یکی از صفحات سایت داشته باشید، از این پارامتر استفاده کنید'),
                    'fields'      =>
                        [
                            'url' =>
                                [
                                    'mode'  => 'text',
                                    'hint'  => \Yii::t('parameters',
                                        'لینک خود را در اینجا درج نمایید، توجه داشته باشید که از این تابع فقط برای لینک دادن به درون سیستم استفاده کنید'),
                                    'label' => \Yii::t('parameters', 'لینک مربوطه را وارد کنید')
                                ]
                        ],
                ],
                [
                    'key'         => 'categoriesWidget',
                    'val'         => function ($limit = 3, $showCount = true) {
                        return \system\theme\Widgets\Categories::widget([
                            'limit'     => $limit,
                            'showCount' => $showCount
                        ]);
                    },
                    'function'    => true,
                    'private'     => 0,
                    'description' => \Yii::t('parameters', 'یک ابزارک شامل لیست دسته بندی ها(قابل کلیک) ایجاد میکند'),
                    'fields'      =>
                        [
                            'limit'     =>
                                [
                                    'mode'  => 'text',
                                    'hint'  => \Yii::t('parameters',
                                        'تعداد دسته هایی که قصد دارید در این ویجت نمایش داده شود را عنوان کنید'),
                                    'label' => \Yii::t('parameters', 'تعداد مورد نظر')
                                ],
                            'showCount' =>
                                [
                                    'mode'   => 'checkbox',
                                    'hint'   => \Yii::t('parameters',
                                        'آیا مایل هستید تعداد مقاله های داخل هر دسته بندی مقابل نام دسته بندی نمایش داده شود؟'),
                                    'label'  => \Yii::t('parameters', 'نمایش تعداد مقاله ها'),
                                    'values' =>
                                        [
//                                            0=>'label'
                                        ]

                                ],

                        ],
                ],
                [
                    'key'         => 'PapulateArticlesWidget',
                    'val'         => function ($limit = 3) {

                        return \system\theme\Widgets\PapularArticles::widget(['limit' => $limit]);
                    },
                    'function'    => true,
                    'private'     => 0,
                    'description' => \Yii::t('parameters', 'یک ابزارک شامل لیست مقالات محبوب(قابل کلیک) ایجاد میکند'),
                    'fields'      =>
                        [
                            'limit' =>
                                [
                                    'mode'  => 'text',
                                    'hint'  => \Yii::t('parameters',
                                        'تعداد مقالاتی که قصد دارید در این ویجت نمایش داده شود را عنوان کنید'),
                                    'label' => \Yii::t('parameters', 'تعداد مورد نظر')
                                ],

                        ],
                ],


                [
                    'key'         => 'indexPage',
                    'function'    => true,
                    'private'     => 0,
                    'val'         => function () {
                        return \system\theme\Widgets\pages\IndexPageWidget::widget();
                    },
                    'description' => 'یک سشن برای صفحه ی ایندکس ایجاد میکند',
                    'fields'      => []
                ],


                // </ Functions >

            ]
        );
    }
    // </ Parameters >


    // < Widgets >
    {
        Core::setComponents(
            [
                [
                    'name'  => 'ردیف ها',
                    'items' =>
                        [
                            [
                                'name'        => 'homeImage',
                                'label'       => 'تصویر بزرگ خانه',
                                'description' => \Yii::t('site',
                                    'یک بلوک شامل یک تصویر بزرگ برای ابتدای صفحه ی خانه ایجاد میکند')
                            ],
                            [
                                'name'        => 'descriptionSlider',
                                'label'       => 'اسلایدر و توضیحات',
                                'description' => \Yii::t('site',
                                    'یک بلوک دارای اسلایدر و توضیحات مد نظر شما و کلید ارجا به صفحه ی دیگر ایجاد میکند')
                            ],
                            [
                                'name'        => 'statParalax',
                                'label'       => 'بک گراند پارالاکس',
                                'description' => \Yii::t('site',
                                    'یک بلوک دارای اسلایدر و توضیحات مد نظر شما و کلید ارجا به صفحه ی دیگر ایجاد میکند')
                            ],
                            [
                                'name'        => 'projectBlockRight',
                                'label'       => 'بلاک نمونه کار راستچین',
                                'description' => \Yii::t('site',
                                    'یک بلوک دارای اسلایدر و توضیحات مد نظر شما و کلید ارجا به صفحه ی دیگر ایجاد میکند')
                            ],
                        ],
                ],
                [
                    'name'  => 'المنت های نوشتاری',
                    'items' =>
                        [
                            [
                                'name'        => 'tListNumber',
                                'label'       => 'لیست شماره گذاری شده',
                                'description' => 'یک لیست شماره گذاری شده ایجاد میکند که میتوانید هر جایی از آن استفاده کنید'
                            ],
                            [
                                'name'        => 'tListNoNumber',
                                'label'       => 'لیست شماره گذاری نشده',
                                'description' => 'یک لیست شماره گذاری شده ایجاد میکند که میتوانید هر جایی از آن استفاده کنید'
                            ],
                            [
                                'name'        => 'tListIconic',
                                'label'       => 'لیست دارای آیکون',
                                'description' => 'یک آیتم دارای آیکون ایجاد میکند که میتوانید هر جایی از آن استفاده کنید'
                            ],
                            [
                                'name'        => 'tTable',
                                'label'       => 'جدول',
                                'description' => 'یک جدول ایجاد میکند که هر جایی قابل استفاده است'
                            ],

                        ],
                ],

            ]
        );

        Core::widgetLayoutStyles(
            <<<CSS

body, textarea {
	background: rgb(255, 255, 255) !important;
}
main {
	margin-top: 130px;
	margin-bottom: 50px;
	margin-right: 50px;
}
.content-holder {
	padding: 0 !important;
}
begincontent img{
    min-height: 150px;
    min-width: 150px;
}
begincontent .content {
	border-left: 30px #28728e2e solid;
	content: "بلوک";
	margin-bottom: 30px;
	margin-top: 30px;
}
begincontent .row::after {
	background-color: #F5F5F5;
	border: 1px solid #DDDDDD;
	border-radius: 4px 0 4px 0;
	color: #9DA0A4;
	content: "Row";
	font-size: 12px;
	font-weight: bold;
	left: 32px;
	line-height: 2;
	padding: 3px 7px;
	position: absolute;
	top: 32px;
}
begincontent .container::after, begincontent .container-fluid::after {
	background-color: #F5F5F5;
	border: 1px solid #DDDDDD;
	border-radius: 4px 0 4px 0;
	color: #9DA0A4;
	content: "CONTAINER";
	font-size: 12px;
	font-weight: bold;
	left: 0;
	line-height: 2;
	padding: 3px 7px;
	position: absolute;
	top: 0;
}
begincontent .content::after {
	
	border-radius: 4px 0 4px 0;
	color: #9DA0A4;
	content: "BLOCK";
	font-size: 12px;
	font-weight: bold;
	left: -43px;
	line-height: 2;
	padding: 3px 7px;
	position: absolute;
	top: 10px;
	rotate: -90deg;
	background: transparent;
	border: none;
}
begincontent .col::after,
begincontent  .col-1::after,
begincontent .col-10::after,
begincontent .col-11::after,
begincontent .col-12::after,
begincontent .col-2::after,
begincontent .col-3::after,
begincontent .col-4::after,
begincontent .col-5::after,
begincontent .col-6::after,
begincontent .col-7::after,
begincontent .col-8::after,
begincontent .col-9::after,
begincontent .col-auto::after,
begincontent .col-lg::after,
begincontent .col-lg-1::after,
begincontent .col-lg-10::after,
begincontent .col-lg-11::after,
begincontent .col-lg-12::after,
begincontent .col-lg-2::after,
begincontent .col-lg-3::after,
begincontent .col-lg-4::after,
begincontent .col-lg-5::after,
begincontent .col-lg-6::after,
begincontent .col-lg-7::after,
begincontent .col-lg-8::after,
begincontent .col-lg-9::after,
begincontent .col-lg-auto::after,
begincontent .col-md::after,
begincontent .col-md-1::after,
begincontent .col-md-10::after,
begincontent .col-md-11::after,
begincontent .col-md-12::after,
begincontent .col-md-2::after,
begincontent .col-md-3::after,
begincontent .col-md-4::after,
begincontent .col-md-5::after,
begincontent .col-md-6::after,
begincontent .col-md-7::after,
begincontent .col-md-8::after,
begincontent .col-md-9::after,
begincontent .col-md-auto::after,
begincontent .col-sm::after,
begincontent .col-sm-1::after,
begincontent .col-sm-10::after,
begincontent .col-sm-11::after,
begincontent .col-sm-12::after,
begincontent .col-sm-2::after,
begincontent .col-sm-3::after,
begincontent .col-sm-4::after,
begincontent .col-sm-5::after,
begincontent .col-sm-6::after,
begincontent .col-sm-7::after,
begincontent .col-sm-8::after, 
begincontent .col-sm-9::after,
begincontent .col-sm-auto::after,
begincontent .col-xl::after,
begincontent .col-xl-1::after,
begincontent .col-xl-10::after,
begincontent .col-xl-11::after,
begincontent .col-xl-12::after,
begincontent .col-xl-2::after,
begincontent .col-xl-3::after,
begincontent .col-xl-4::after,
begincontent .col-xl-5::after,
begincontent .col-xl-6::after,
begincontent .col-xl-7::after,
begincontent .col-xl-8::after,
begincontent .col-xl-9::after,
begincontent .col-xl-auto::after
{
	background-color: #F5F5F5;
border: 1px solid #DDDDDD;
border-radius: 4px 0 4px 0;
color: #9DA0A4;
content: "Column";
font-size: 12px;
font-weight: bold;
left: -1px;
padding: 3px 7px;
position: absolute;
top: -1px;
}
CSS
            ,
            <<<CSS

CSS

        );
    }
    // </ Widgets >

    Core::pageTemplates(
        [
            [
                'name'        => 'main_header',
                'label'       => \Yii::t('site', 'دارای هدر'),
                'description' => 'توضیحات تست',
            ],
            [
                'name'        => 'main',
                'label'       => \Yii::t('site', 'قالب اصلی'),
                'description' => 'توضیحات تست',
            ],

        ]
    );

    Core::addSlug(
        [

            [
                'table'  => BlogArticles::tableName(),
                'action' => 'article',
                'params' => ['id']
            ],
            [
                'table'  => BlogCategory::tableName(),
                'action' => 'category',
                'params' => ['id']
            ],
            [
                'table'  => Product::tableName(),
                'action' => 'product',
                'params' => ['id']
            ],
        ]
    );

    Core::addMenuTypes(
        [
            [
                'name'     => 'page',
                'action'   => 'page',
                'params'   => ['id'],
                'label'    => 'برگه',
                'model'    => Pages::className(),
                'modelMap' => [
                    'id',
                    'title'
                ],
            ],
            [
                'name'     => 'article',
                'action'   => 'article',
                'params'   => ['id'],
                'label'    => 'مقاله',
                'model'    => BlogArticles::className(),
                'modelMap' => [
                    'id',
                    'title'
                ]
            ],
            [
                'name'     => 'category',
                'action'   => 'category',
                'params'   => ['id'],
                'label'    => 'دسته بندی',
                'model'    => BlogCategory::className(),
                'modelMap' => [
                    'id',
                    'title'
                ]
            ],
        ]
    );

    // < theme configs >
    {
        Core::addFonts(
            [
//                [
//                    'value' => 'Aviny',
//                    'text' => 'آووینی'
//                ],
                [
                    'value' => 'IRANSans',
                    'text'  => 'ایران سنس'
                ],
                [
                    'value' => 'Yekan',
                    'text'  => 'یکان'
                ],
//                [
//                    'value' => 'Mahboobeh',
//                    'text' => 'محبوبه'
//                ],
//                [
//                    'value' => 'Shabnam',
//                    'text' => 'شبنم'
//                ],
//                [
//                    'value' => 'Vazir',
//                    'text' => 'وزیر'
//                ],
//                [
//                    'value' => 'Naskh',
//                    'text' => 'نسخ'
//                ],
//                [
//                    'value' => 'Dubai',
//                    'text' => 'دوبی'
//                ],
//                [
//                    'value' => 'Dastnevis',
//                    'text' => 'دست نویس'
//                ],
//                [
//                    'value' => 'Sahel',
//                    'text' => 'ساحل'
//                ],
//                [
//                    'value' => 'Lalezar',
//                    'text' => 'لاله زار'
//                ],
//                [
//                    'value' => 'Platinosans',
//                    'text' => 'پلاتینوسنس'
//                ],
//                [
//                    'value' => 'Myriad',
//                    'text' => 'میریاد'
//                ],
//                [
//                    'value' => 'Neirizi',
//                    'text' => 'نی ریزی'
//                ],
//                [
//                    'value' => 'Gandom',
//                    'text' => 'گندم'
//                ],
            ]
        );
    }
    // </ theme configs >


    // < Hint Configs >
    {
        Core::configHints(
            [
                \frontend\controllers\SiteController::className() =>
                    [
                        'work'  => Posttypes::tableName(),
                        'index' => Posttypes::tableName(),
                    ]
            ]
        );
    }
    // </ Hint Configs >

    // < Frontend Search result Config >
    {
        Core::addSearchItems(
            [
                'view'  => 'search',
                'types' =>
                    [
                        [
                            'label'        => \Yii::t('site', 'مقالات یافت شده'),
                            'model'        => BlogArticles::className(),
                            'search_field' => 'content',
                            'widget'       =>
                                [
                                    'template'        => 'articleCard',
                                    //system/theme/components/articleCard
                                    'customFields'    =>
                                        [
                                            'left'        => 'created_at',
                                            'author_text' => 'author',
                                            'image'       => 'id',
                                            'category'    => 'id',
                                            'url'         => 'id',
                                            'curl'        => 'id',
                                        ],
                                    'fieldsCallbacks' =>
                                        [
                                            'author'      => function ($id) {
                                                $model = User::findOne($id);
                                                if (!empty($model)) {
                                                    return $model->nickName;
                                                } else {
                                                    return '';
                                                }
                                            },
                                            'image'       => function ($id) {
                                                $gallery = GalleryMedias::find()->where([
                                                    'table'    => BlogArticles::tableName(),
                                                    'table_id' => $id
                                                ])->one();

                                                if (!empty($gallery)) {
                                                    return Yii::$app->UploadManager->getFit('dl/BlogArticles/',
                                                        $gallery->file_name.$gallery->extension, '570*321');
                                                } else {
                                                    return Yii::$app->UploadManager->getFit('dl/BlogArticles/',
                                                        'defaultImage.jpg', '570*321');
                                                }
                                            },
                                            'left'        => function ($created_at) {
                                                return Yii::$app->functions->timeLeft($created_at);
                                            },
                                            'author_text' => function ($id) {
                                                return \Yii::t('site', 'توسط');
                                            },
                                            'category'    => function ($id) {
                                                $model = BlogArticleFkCategory::findOne(['article' => $id]);
                                                if (!empty($model)) {
                                                    return $model->getCategory0()->title;
                                                } else {
                                                    return '';
                                                }
                                            },
                                            'curl'        => function ($id) {
                                                return Yii::$app->urlManager->createUrl([
                                                    '/category',
                                                    'id' => $id
                                                ]);
                                            },
                                            'url'         => function ($id) {
                                                return Yii::$app->urlManager->createUrl([
                                                    '/article',
                                                    'id' => $id
                                                ]);
                                            },


                                        ],

                                ],
                        ]
                    ]
            ]
        );
    }
    // </ Frontend Search result Config >


    // < Config Category Page >
    {
        Core::addCategoryItems(
            [
                'template'        => 'articleCardClassic',
                //system/theme/components/articleCard
                'customFields'    =>
                    [
                        'left'          => 'created_at',
                        'author_text'   => 'author',
                        'comment_text'  => 'author',
                        'category_text' => 'author',
                        'more_text'     => 'author',
                        'date_text'     => 'author',
                        'image'         => 'id',
                        'category'      => 'id',
                        'url'           => 'id',
                        'curl'          => 'id',
                        'date_j'        => 'created_at',
                        'comment_count' => 'id',
                    ],
                'fieldsCallbacks' =>
                    [
                        'author'        => function ($id) {
                            $model = User::findOne($id);
                            if (!empty($model)) {
                                return $model->nickName;
                            } else {
                                return '';
                            }
                        },
                        'image'         => function ($id) {
                            $gallery = GalleryMedias::find()->where([
                                'table'    => BlogArticles::tableName(),
                                'table_id' => $id
                            ])->one();

                            if (!empty($gallery)) {
                                return Yii::$app->UploadManager->getFit('dl/BlogArticles/',
                                    $gallery->file_name.$gallery->extension, '570*321');
                            } else {
                                return Yii::$app->UploadManager->getFit('dl/BlogArticles/', 'defaultImage.jpg',
                                    '570*321');
                            }
                        },
                        'date_j'        => function ($created_at) {
                            return Yii::$app->functions->convertdate($created_at);
                        },
                        'author_text'   => function ($id) {
                            return \Yii::t('site', 'توسط');
                        },
                        'category'      => function ($id) {
                            $model = BlogArticleFkCategory::findOne(['article' => $id]);
                            if (!empty($model)) {
                                return $model->getCategory0()->title;
                            } else {
                                return '';
                            }
                        },
                        'curl'          => function ($id) {
                            $model = BlogArticleFkCategory::findOne(['article' => $id]);
                            if (empty($model)) {
                                return '';
                            }
                            return Yii::$app->urlManager->createUrl([
                                '/category',
                                'id' => $model->getCategory0()->id
                            ]);
                        },
                        'url'           => function ($id) {
                            $slug = Slug::getSlugWithTableId(BlogArticles::tableName(), $id);
                            if (!empty($slug)) {
                                return Yii::$app->urlManager->createUrl(['/'.$slug]);
                            } else {
                                return Yii::$app->urlManager->createUrl([
                                    '/article',
                                    'id' => $id
                                ]);
                            }
                        },
                        'comment_count' => function ($id) {
                            return BlogComment::find()->where(['article' => $id])->count();
                        },
                        'content'       => function ($content) {
                            return Parameters::filter(Yii::$app->functions->limitText($content, 500));
                        },
                        'more_text'     => function () {
                            return \Yii::t('site', 'بیشتر بخوانید');
                        },
                        'category_text' => function () {
                            return \Yii::t('site', 'دسته :');
                        },
                        'comment_text'  => function () {
                            return \Yii::t('site', 'دیدگاه ها :');
                        },
                        'date_text'     => function () {
                            return \Yii::t('site', 'نوشته شده در :');
                        },

                    ],

            ]
        );
    }
    // </ Config Category Page >


    // < Admin Dashboard >
    {
        Core::addAdminDashboardStat(
            [
                [
                    [
                        'col'       => 4,
                        'icon'      => 'language',
                        'title'     => 'مقالات پیش نویس',
                        'color'     => 'warning',
                        'unit'      => 'مقاله',
                        'model'     => BlogArticles::className(),
                        'condition' => ['status' => 0]
                    ],
                    [
                        'col'       => 4,
                        'icon'      => 'language',
                        'title'     => 'دیدگاه در انتظار تایید',
                        'color'     => 'warning',
                        'unit'      => 'دیدگاه',
                        'model'     => BlogComment::className(),
                        'condition' => ['status' => BlogComment::STATUS_WAITING]
                    ],
                    [
                        'col'       => 4,
                        'icon'      => 'language',
                        'title'     => 'صفحات پیش نویس',
                        'color'     => 'warning',
                        'unit'      => 'برگه',
                        'model'     => Pages::className(),
                        'condition' => ['status' => 0]
                    ],
                ],
                [
                    [
                        'col'       => 4,
                        'icon'      => 'language',
                        'title'     => 'مقالات',
                        'color'     => 'info',
                        'unit'      => 'مقاله',
                        'model'     => BlogArticles::className(),
                        'condition' => ['status' => 1]
                    ],
                    [
                        'col'   => 4,
                        'icon'  => 'language',
                        'title' => 'دیدگاه های ثبت شده',
                        'color' => 'info',
                        'unit'  => 'دیدگاه',
                        'model' => BlogComment::className(),
                    ],
                    [
                        'col'   => 4,
                        'icon'  => 'language',
                        'title' => 'صفحات ثبت شده',
                        'color' => 'info',
                        'unit'  => 'برگه',
                        'model' => Pages::className(),
                    ],
                ],

            ]
        );
    }
    // </ Admin Dashboard >
}
// </ Theme Config >

return [
    'adminEmail'                    => 'admin@example.com',
    'supportEmail'                  => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
];
