<?php


namespace system\theme\Widgets\pages;


use system\modules\product\models\Product;
use yii\bootstrap\Widget;

class IndexPageWidget extends Widget
{
    public function run()
    {

        $products = Product::find()->where(['status' => Product::STATUS_ACTIVE])->all();
        return $this->render('indexPage',
            [
                'products' => $products
            ]
        );
    }
}
