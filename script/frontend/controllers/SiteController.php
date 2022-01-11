<?php

namespace frontend\controllers;

use YiiMan\YiiBasics\lib\Controller;
use YiiMan\YiiBasics\lib\sitemap\File;
use YiiMan\YiiBasics\modules\pages\models\Pages;
use YiiMan\YiiBasics\modules\posttypes\models\Posttypes;
use YiiMan\YiiBasics\modules\product\models\Product;
use YiiMan\YiiBasics\modules\slug\models\Slug;
use function date;
use function strtotime;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;



    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $model = Pages::find()->where(['language' => Yii::$app->Language->defaultLanguageID()])->andWhere(['>', 'default', 0])->one();

        if (empty($model)) {
            throw new  NotFoundHttpException(\Yii::t('site', 'صفحه ی نخست یافت نشد، لطفا یک صفحه را به عنوان صفحه ی نخست انتخاب نمایید'));
        }
        return $this->renderTemplate(
            'index',
            [
                'model' => $model
            ]

        );
    }


    public function actionProduct($id, $hash = null)
    {
        if (!empty($id)) {

            $model = Product::findOne(['id' => $id, 'status' => Product::STATUS_ACTIVE]);
        } elseif (empty($id) && !empty($hash)) {
            $model = Product::findOne(['hash' => $hash, 'status' => Product::STATUS_ACTIVE]);
        } else {
            throw new NotFoundHttpException('یافت نشد');

        }
        if (empty($model)) {
            throw new NotFoundHttpException('یافت نشد');
        }

        return $this->render('product', ['model' => $model]);
    }


    public function actionSitemap()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<?xml-stylesheet type="text/xsl" href="https://gitcdn.xyz/repo/pedroborges/xml-sitemap-stylesheet/master/sitemap.xsl"?>
<urlset
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
XML;

        $siteMapFile = new File();

        $pages = Pages::find()->where(['status' => Pages::STATUS_ACTIVE])->all();
        if (!empty($pages)) {
            foreach ($pages as $page) {
                /**
                 * @var $page Posttypes
                 */
                $url = '/page/' . $page->id;
                if (!empty($slug = Slug::getSlug($page))) {
                    $url = $slug;
                }


                $xml .= $siteMapFile->writeUrl(
                    [$url],
                    [
                        'priority' => '0.8', 'changeFrequency' => File::CHECK_FREQUENCY_WEEKLY,

                    ]
                );
            }
        }


        /* < Works > */
        {

            $works = Posttypes::getActivePosts('works');
            if (!empty($works)) {
                foreach ($works as $work) {
                    /**
                     * @var $work Posttypes
                     */
                    $images = [];
                    if ($work->defaultImageCount() > 1) {
                        foreach ($work->getdefaultImageLinks('800*500') as $link) {
                            $images[] = $link;
                        }
                    }
                    $xml .= $siteMapFile->writeUrl(
                        ['project/' . $work->id],
                        [
                            'lastModified' => $work->updated_at ? date('Y-m-d', strtotime($work->updated_at)) : date('Y-m-d'),
                            'priority' => '0.8',
                            'changeFrequency' => File::CHECK_FREQUENCY_WEEKLY,
                            'images' => $images
                        ]
                    );

                }
            }
        }
        /* </ Works > */


//        $siteMapIndexFile = new IndexFile();
//        $siteMapIndexFile->writeUp();


        $xml .= '</urlset>';
        echo $xml;
        exit();
    }

}
	

