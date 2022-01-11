<?php
	/**
	 * Created by YiiMan TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:+989353466620 | +17272282283
	 * Company Phone:05138846411
	 * Site:https://yiiman.ir
	 * Date: ۱۷/۰۴/۲۰۲۰
	 * Time: ۰۲:۱۶ قبل‌ازظهر
	 */
	
	namespace system\assets\vue;
	
	
	use system\lib\AssetBundle;
	use system\lib\i18n\Layout;
	
	class VueAssets extends AssetBundle {
		public function init() {
			parent::init(); // TODO: Change the autogenerated stub
			$this->sourcePath = realpath( __DIR__ . '/files' );
		}
		
		public $js =
			[
				'vue.js'
			];
	}
