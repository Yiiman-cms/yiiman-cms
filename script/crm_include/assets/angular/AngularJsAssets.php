<?php
	namespace system\assets\angular;
	use yii\web\AssetBundle;
	use yii\web\View;
	
	/**
	 * Created by YiiMan TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:+989353466620 | +17272282283
	 * Company Phone:05138846411
	 * Site:https://yiiman.ir
	 * Date: 12/29/2018
	 * Time: 2:45 AM
	 */
	
	class AngularJsAssets extends AssetBundle {
		public function init() {
			parent::init(); // TODO: Change the autogenerated stub
			$this->sourcePath=realpath( __DIR__.'/files');
		}
		public $js=
			[
				'js/angular.min.js',
			];
		
	
	
	public $jsOptions=['position'=>View::POS_HEAD];
		
		public $depends = [
			'yii\web\YiiAsset',
			'yii\bootstrap\BootstrapAsset',
		];
	}