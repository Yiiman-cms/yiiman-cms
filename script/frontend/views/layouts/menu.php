<?php


use YiiMan\YiiBasics\modules\language\models\Language;
use YiiMan\YiiBasics\modules\menu\models\Menu; ?>
<!-- nav sidebar -->
<div class="nav-holder-wrap but-hol">
    <div class="sb-widget-wrap fl-wrap">
        <h3>Navigation</h3>
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav class="nav-inner" id="menu">
                <ul>
                    <li>
                        <a href="#" class="act-link">Home </a>
                        <!--second level -->
                        <ul>
                            <li><a href="index.html" class="ajax">Carousel</a></li>
                            <li><a href="index2.html" class="ajax">Slider</a></li>
                            <li><a href="index3.html" class="ajax">Image</a></li>
                            <li><a href="index4.html" class="ajax">Slideshow</a></li>
                            <li><a href="index5.html" class="ajax">Video</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="#">Portfolio </a>
                        <!--second level -->
                        <ul>
                            <li><a href="portfolio.html" class="ajax">Horizontal 2 Columns</a></li>
                            <li><a href="portfolio2.html" class="ajax">Horizontal 3 Columns</a></li>
                            <li><a href="portfolio3.html" class="ajax">Horizontal 1 Columns</a></li>
                            <li><a href="portfolio4.html" class="ajax">Masonry</a></li>
                            <li><a href="portfolio5.html" class="ajax">Masonry 2</a></li>
                            <li><a href="portfolio6.html" class="ajax">Column Grid</a></li>
                            <li>
                                <a href="#">Single </a>
                                <!--third  level -->
                                <ul>
                                    <li><a href="portfolio-single.html" class="ajax">Carousel</a></li>
                                    <li><a href="portfolio-single2.html" class="ajax">Carousel 2</a></li>
                                    <li><a href="portfolio-single3.html" class="ajax">Column Grid</a></li>
                                    <li><a href="portfolio-single4.html" class="ajax">Column Fullwidth</a></li>
                                    <li><a href="portfolio-single5.html" class="ajax">Fullscreen Slider</a></li>
                                    <li><a href="portfolio-single6.html" class="ajax">Fullscreen Slider 2</a></li>
                                </ul>
                                <!--third level end-->
                            </li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="about.html" class="ajax">About</a>
                    </li>
                    <li>
                        <a href="services.html" class="ajax">Services</a>
                    </li>
                    <li>
                        <a href="blog.html" class="ajax">News</a>
                    </li>
                    <li>
                        <a href="contacts.html" class="ajax">Contacts</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- navigation  end -->
    <!-- sb-widget-wrap-->
    <div class="sb-widget-wrap fl-wrap">
        <h3>Instagram Photos</h3>
        <div class="sb-widget fl-wrap">
            <div class='jr-insta-thumb' id="insta-content" data-instatoken="3075034521.5d9aa6a.284ff8339f694dbfac8f265bf3e93c8a">
            </div>
        </div>
    </div>
    <!-- sb-widget-wrap end-->
    <!-- sb-widget-wrap-->
    <div class="sb-widget-wrap fl-wrap">
        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
        <div class="sb-widget  fl-wrap">
            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet,  </p>
            <div class="subcribe-form fl-wrap">
                <form id="subscribe">
                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                    <button type="submit" id="subscribe-button" class="subscribe-button">Submit</button>
                    <label for="subscribe-email" class="subscribe-message"></label>
                </form>
            </div>
        </div>
    </div>
    <!-- sb-widget-wrap end-->
    <!-- sb-widget-wrap-->
    <div class="sb-widget-wrap fl-wrap">
        <h3>We're Are Social</h3>
        <div class="sb-widget    fl-wrap">
            <div class="sidebar-social fl-wrap">
                <ul>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- sb-widget-wrap end-->
</div>
<div class="nav-overlay"></div>
<!-- nav sidebar end-->

<nav class="menu-classic menu-fixed menu-transparent light align-right" data-menu-anima="fade-in">
    <div class="container">
        <div class="menu-brand">
            <a href="#">
                <img class="logo-default scroll-hide" style="height: 42px" src="<?= Yii::$app->Options->logo ?>" alt="logo"/>
                <img class="logo-retina scroll-hide" style="height: 42px" src="<?= Yii::$app->Options->logo ?>" alt="logo"/>
                <img class="logo-default scroll-show" style="height: 42px" src="<?= Yii::$app->Options->logo ?>" alt="logo"/>
                <img class="logo-retina scroll-show" style="height: 42px" src="<?= Yii::$app->Options->logo ?>" alt="logo"/>
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">

            <?= Menu::getMenuHtml(1, 0,
                [
                    'head_ul_template' => '<ul>{items}</ul>',
                    'in_item_template' => '<a href="{url}" >{title}</a>',
                    'has_child_in_item_template' => '<li class="dropdown"><a >{title}</a><ul >{items}</ul></li>',
                    'has_child_items_template' => '<li>{item}</li>',
                ]
            ) ?>

            <div class="menu-right">
                <ul class="lan-menu">
                    <li class="dropdown">
                        <?php
                        $lng = Yii::$app->language;
                        $lng = Yii::$app->Language->getLanguages()[$lng];

                        $model = (new Language());
                        $model->id = $lng->id;
                        $model->image = $lng->image;
                        ?>
                        <a hreflang="<?= strtolower(Yii::$app->Language->getLanguages()[Yii::$app->language]->systemCode) ?>" href="/<?= strtolower(Yii::$app->Language->getLanguages()[Yii::$app->language]->shortCode) ?>"><img
                                    src="<?= Yii::$app->UploadManager->getImageUrl($model, 'image', '15*15') ?>"/><?= strtolower(Yii::$app->Language->getLanguages()[Yii::$app->language]->shortCode) ?>
                        </a>
                        <ul>
                            <?php
                            foreach (Yii::$app->Language->getLanguages() as $item) {
                                $model = (new Language());
                                $model->id = $item->id;
                                $model->image = $item->image;
                                ?>
                                <li>
                                    <a hreflang="<?= strtolower(Yii::$app->Language->getLanguages()[Yii::$app->language]->systemCode) ?>" href="/<?= strtolower($item->shortCode) ?>">
                                        <img src="<?= Yii::$app->UploadManager->getImageUrl($model, 'image', '15*15') ?>"
                                             alt="logo"/><?= strtolower($item->shortCode) ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>







