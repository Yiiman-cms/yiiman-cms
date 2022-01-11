<?php
	/**
	 * Created by YiiMan TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:+989353466620 | +17272282283
	 * Company Phone:05138846411
	 * Site:https://yiiman.ir
	 * Date: ۰۱/۲۲/۲۰۲۰
	 * Time: ۱۶:۰۷ بعدازظهر
	 */
	
	namespace frontend\controllers;
	
	use CURLFile;
	use Exception;
	use PHPExcel;
	use PHPExcel_IOFactory;
	use system\lib\arvanApi;
	use system\lib\Telegram;
	use system\modules\mrtelegramo\components\Operations;
	use system\modules\mrtelegramo\models\MrtelegramoFactor;
	use system\modules\mrtelegramo\models\MrtelegramoFactorItems;
	use system\modules\mrtelegramo\models\MrtelegramoGrades;
	use system\modules\mrtelegramo\models\MrtelegramoIps;
	use system\modules\mrtelegramo\models\MrtelegramoScores;
	use system\modules\mrtelegramo\models\MrtelegramoServer;
	use system\modules\mrtelegramo\models\MrtelegramoUser;
	use system\modules\mrtelegramo\models\MrtelegramoUserplan;
	use Yii;
	use yii\base\Controller;
	use yii\db\Expression;
	use yii\web\BadRequestHttpException;
	use function set_time_limit;
	use function sleep;
	use function usleep;
	use function var_dump;
	
	class CronController extends Controller {
		private $token_telegram = '767968586:AAELpDGEU5Xdrp24gH6bEB8JN4zESpdFZ8g';


	}
