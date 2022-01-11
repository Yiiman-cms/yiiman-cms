<?php

use YiiMan\YiiBasics\lib\Application;
use YiiMan\YiiBasics\lib\Language;

require '../../script/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../script');
$dotenv->load();
$debug = (bool) $_ENV['DEBUG'];


$enableWatchdog = (bool) $_ENV['WHATCHDOG'];


// < check Debug >
{
    if ($enableWatchdog) {
        if ($debug && file_exists(__DIR__.'/debug')) {
            $dcontent = file_get_contents(__DIR__.'/debug');
            $diff = abs(strtotime($dcontent) - strtotime(date('Y-m-d H:i:s')));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
            $min = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60) / (60));

            if ($min > 30) {
                $debug = false;
            }
        } else {
            $file = fopen(__DIR__.'/debug', 'w+');
            chmod(__DIR__.'/debug', 0777);
            fwrite($file, date('Y-m-d H:i:s'));
            fclose($file);
        }
    }

}
// </ check Debug >


define('appName', 'backend');
defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', __DIR__.'/../');
defined('YII_PUBLIC_HTML_DIR') or define('YII_PUBLIC_HTML_DIR', __DIR__.'/../');
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_ENV') or define('YII_ENV', $debug ? 'dev' : 'prod');
defined('YII_ADMIN_FOLDER') or define('YII_ADMIN_FOLDER', basename(__DIR__));

require __DIR__.'/../../script/common/system.php';

require __DIR__.'/../../script/vendor/autoload.php';
require __DIR__.'/../../script/vendor/yiisoft/yii2/Yii.php';
require __DIR__.'/../../script/common/config/bootstrap.php';
require __DIR__.'/../../script/backend/config/bootstrap.php';
include(realpath(__DIR__.'/../../script/config.php'));

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__.'/../../script/common/config/main.php',
    require __DIR__.'/../../script/common/config/main-local.php',
    require __DIR__.'/../../script/backend/config/main.php',
    require __DIR__.'/../../script/backend/config/main-local.php'
);

$app = (new Application($config));
$app->language = Language::changeLanguage();

$app->run();
