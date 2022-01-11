<?php
	/**
	 * Created by YiiMan TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:+989353466620 | +17272282283
	 * Company Phone:05138846411
	 * Site:https://yiiman.ir
	 * Date: 8/24/2018
	 * Time: 11:06 AM
	 */
	
	/**
	 * Site: https://yiiman.ir
	 * AuthorName: gholamreza beheshtian
	 * AuthorNumber:+989353466620 | +17272282283
	 * AuthorCompany: YiiMan
	 *
	 *
	 */
	
	use kartik\tabs\TabsX;
	use YiiMan\YiiBasics\widgets\toggle\ToggleWidget;
	use yii\helpers\Html;
	use yii\grid\GridView;
	use system\modules\setting\Module;
	use system\modules\setting\models\Setting;
	use yii\helpers\ArrayHelper;
	use yii\widgets\Pjax;

?>

<!--جست و جو-->
<div class="card" style="margin-top: 20px">
	<h3>تنظیمات جست و جو</h3>
	
	
	<?php
		/**
		 * @todo Upload this file
		 */
	?>
	
	
	<div class="form-group">
		<label for="searchResultLimit" class="col-sm-2 control-label">تعداد نتایج قابل نمایش در جست و جو</label>
		<div class="col-md-1">
			<input type="text" name="searchResultLimit" id="searchResultLimit" class="form-control"
			       value="<?= $options->searchResultLimit ?>"
			       title="" required="required">
		</div>
		<label for="searchResultLimit" class="col-sm-2 control-label">عدد</label>
	</div>
	
	<?php
		$id = 'FilterMinPrice';
	?>
	<div class="form-group">
		<label for="<?= $id ?>" class="col-sm-2 control-label">حداقل قیمت قابل
			فیلتر(<?= Yii::$app->Options->priceUnit ?>)</label>
		<div class="col-md-5">
			<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control" value="<?= $options->{$id} ?>"
			       title="" required="required">
		</div>
		<label for="<?= $id ?>" class="col-sm-4 control-label">در صفحه ی جست و جوی ملک؛ کاربران می توانند حداقل و حداکثر
			رنج قیمت فروش را انتخاب کنند. در اینجا حداقل رنج را وارد نمایید</label>
	</div>
	
	<?php
		$id = 'FilterMaxPrice';
	?>
	<div class="form-group">
		<label for="<?= $id ?>" class="col-sm-2 control-label">حداکثر قیمت قابل
			فیلتر(<?= Yii::$app->Options->priceUnit ?>)</label>
		<div class="col-md-5">
			<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control" value="<?= $options->{$id} ?>"
			       title="" required="required">
		</div>
		<label for="<?= $id ?>" class="col-sm-4 control-label">در صفحه ی جست و جوی ملک؛ کاربران می توانند حداقل و حداکثر
			رنج قیمت فروش را انتخاب کنند. در اینجا حداکثر رنج را وارد نمایید</label>
	</div>

</div>
<!-- متن صفحه ی خرید اشتراک -->
<div class="card" style="margin-top: 20px">
	<h3>متن صفحه ی خرید اشتراک</h3>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'ByePlanText';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">متن قابل نمایش در صفحه ی خرید اشتراک</label>
				<div class="col-md-6">
					<?= \YiiMan\YiiBasics\widgets\tiny\tinyEditorWidget::widget(
						[ 'name' => $id , 'value' => $options->{$id} ]
					) ?>
				</div>
			</div>
		</div>
	
	</div>

</div>
<!-- توکن درگاه پرداخت  -->
<div class="card" style="margin-top: 20px">
	<h3>تنظیمات درگاه پرداخت</h3>
	
	<?php
		$id = 'PayToken';
	?>
	<div class="form-group">
		<label for="<?= $id ?>" class="col-sm-2 control-label">توکن درگاه پرداخت</label>
		<div class="col-md-5">
			<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control" value="<?= $options->{$id} ?>"
			       title="" required="required">
		</div>
		<label for="<?= $id ?>" class="col-sm-4 control-label">اطلاعات توکن درگاه پرداخت خود را در این قسمت وارد
			کنید</label>
	</div>
</div>
<!-- تنظیمات فوتر -->
<div class="card" style="margin-top: 20px">
	<h3>تنظیمات فوتر سایت</h3>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'phone';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">شماره تلفن سایت</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" required="required">
				</div>
			
			</div>
		</div>
	
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'address';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">آدرس دفتر</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" required="required">
				</div>
			
			</div>
		</div>
	
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'email';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">ایمیل سایت</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" required="required">
				</div>
			
			</div>
		</div>
	
	</div>
	<h3>آیکون های شبکه های اجتماعی</h3>
	<div class="row">
		<div class="col-md-12">
			<?php
				$id = 'facebookIconStatus';
			?>
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال سازی یا غیر فعال سازی آیکون فیس بوک در فوتر سایت</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید آیکون شبکه ی اجتماعی فیس بوک را در فوتر سایت خاموش یا روشن کنید</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
				$id = 'GPlusIconStatus';
			?>
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال سازی یا غیر فعال سازی آیکون گوگل پلاس در فوتر سایت</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید آیکون شبکه ی اجتماعی گوگل پلاس را در فوتر سایت خاموش یا روشن کنید</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
				$id = 'instagramIconStatus';
			?>
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال سازی یا غیر فعال سازی آیکون اینستاگرام در فوتر سایت</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید آیکون شبکه ی اجتماعی اینستاگرام را در فوتر سایت خاموش یا روشن کنید</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
				$id = 'telegramIconStatus';
			?>
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال سازی یا غیر فعال سازی آیکون تلگرام در فوتر سایت</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید آیکون شبکه ی اجتماعی تلگرام را در فوتر سایت خاموش یا روشن کنید</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'facebookUrl';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">آدرس شبکه ی اجتماعی فیس بوک</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" >
				</div>
			
			</div>
		</div>
	
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'GplusUrl';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">آدرس شبکه ی اجتماعی گوگل پلاس</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" >
				</div>
			
			</div>
		</div>
	
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<?php
				$id = 'telegramUrl';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">آدرس شبکه ی اجتماعی تلگرام</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" >
				</div>
			
			</div>
		</div>
	
	</div>
	<div class="row" style="margin-bottom: 20px">
		<p>فوتر پایینی سایت</p>
		<div class="row">
			<div class="col-md-12">
				<?php
					$id = 'SecondFooterStatus';
				?>
				<div class="form-group">
					<div class="togglebutton col-sm-12 ">
						<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
							
							<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال سازی یا غیر فعال سازی فوتر پایینی سایت</label>
							<input <?php
								
								
								if ( ! empty( $options->{$id} ) ) {
									echo 'checked=""';
								}
							?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
							<span>با استفاده از این تنظیم می توانید فوتر دوم سایت را خاموش یا روشن کنید</span>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<?php
				$id = 'footerText';
			?>
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">متن فوتر پایینی سایت</label>
				<div class="col-md-5">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       value="<?= $options->{$id} ?>"
					       title="" >
				</div>
			
			</div>
		</div>
	
	</div>
</div>

<!--تصاویر پیش فرض-->
<div class="card" style="margin-top: 20px">
	<h3>تنظیم تصاویر پیش فرض سایت</h3>
	<!--	تصویر کارت های ملک-->
	<div class="row" style="margin-top: 20px">
		<?php
			$id = 'HomeCardPic';
		?>
		<?php
			if ( ! empty( $options->{$id} ) ) {
				?>
				<div class="article col-lg-3 col-sm-6 col-12">
					<img style="
					width: 100%;
					margin-bottom: 20px;
					display: block;
					padding: 30px 20px;
				    padding-top: 30px;
					padding-top: 150px;
					background-size: cover;
					background-position: center;
					border-radius: 6px;
					overflow: hidden;
					" src="<?= $options->{$id} ?>" alt="">
				</div>
				
				<?php
			}
		?>
		
		<div class="col-md-12">
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">تصویر پیش فرض کارت های ملک</label>
				<div class="col-md-6">
					
					<input type="file" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       title="">
				</div>
				<span>تصویر زمینه ی پیض فرض کارت های ملکی را در این بخش وارد نمایید، زمانی که کاربر برای یک ملک، تصویری وارد نکند، از این تصاویر استفاده می شود.</span>
			</div>
		</div>
	</div>
	
	<!--تصویر کارت های مقالات-->
	<div class="row" style="margin-top: 20px">
		<?php
			$id = 'ArticleCardPic';
		?>
		<?php
			if ( ! empty( $options->{$id} ) ) {
				?>
				<div class="article col-lg-3 col-sm-6 col-12">
					<img style="
					width: 100%;
					margin-bottom: 20px;
					display: block;
					padding: 30px 20px;
				    padding-top: 30px;
					padding-top: 150px;
					background-size: cover;
					background-position: center;
					border-radius: 6px;
					overflow: hidden;
					" src="<?= $options->{$id} ?>" alt="">
				</div>
				
				<?php
			}
		?>
		
		<div class="col-md-12">
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">تصویر پیش فرض کارت های مقالات وبلاگ</label>
				<div class="col-md-6">
					
					<input type="file" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       title="">
				</div>
				<span>تصویر زمینه ی پیض فرض کارت های مقالات بخش وبلاگ را در این بخش وارد نمایید، زمانی که کاربر برای یک مقاله، تصویری وارد نکند، از این تصاویر استفاده می شود.</span>
			</div>
		</div>
	</div>
</div>
<!--هدر صفحه ی اصلی-->
<div class="card" style="margin-top: 20px">
	<h3>تنظیمات هدر صفحه اصلی</h3>
	
	<p>
		بخش هدر صفحه ی اصلی سایت در واقع همان بخشیست که کلیدهای جست و جو در آن بخش قرار داده شده است، شما میتوانید این
		بخش را شخصی سازی نمایید
	</p>
	
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						<?php $id = 'HomeHeaderStatus' ?>
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال
							سازی یا غیر فعال سازی بخش هدر صفحه ی اول</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید بخش هدر صفحه ی اول را فعال یا غیر فعال کنید</span>
					</label>
				
				</div>
			
			</div>
		</div>
	
	</div>
	
	
	<div class="row" style="margin-top: 20px">
		<?php
			$id = 'headerPic';
		?>
		<?php
			if ( ! empty( $options->{$id} ) ) {
				?>
				<div class="col-md-12">
					
					<img style="width: 100%;margin-bottom: 20px" src="<?= $options->{$id} ?>" alt="">
				</div>
				<?php
			}
		?>
		
		<div class="col-md-12">
			<div class="form-group">
				<label for="<?= $id ?>" class="col-sm-2 control-label">تصویر هدر سایت</label>
				<div class="col-md-6">
					
					<input type="file" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       title="">
				</div>
				<span>تصویر پشت زمینه ی هدر سایت را در این قسمت وارد نمایید</span>
			</div>
		</div>
	</div>
	
	
	<h4>بخش جست و جو</h4>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'HomeHeaderH1';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">تیتر بخش هدر صفحه ی اول سایت</label>
				<div class="col-md-6">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       title="" required="required" value="<?= $options->{$id} ?>">
				</div>
				<span> تیتر بخش هدر صفحه ی اول سایت را میتوانید از این بخش تغییر دهید(تغییرات پس از ذخیره سازی بلافاصله اعمال خواهد شد)</span>
			
			</div>
		</div>
	
	</div>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'HomeHeaderP';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">متن بخش هدر صفحه ی اصلی سایت</label>
				<div class="col-md-6">
							<textarea type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
							          title="" required="required"><?= $options->{$id} ?></textarea>
				</div>
				<span> متن بخش هدر صفحه ی اول سایت را میتوانید از این بخش تغییر دهید(تغییرات پس از ذخیره سازی بلافاصله اعمال خواهد شد)</span>
			
			</div>
		</div>
	
	</div>


</div>


<!-- تنظیمات بخش توضیحات -->
<div class="card" style="margin-top: 20px">
	<h3>تنظیمات صفحه ی اول سایت(بخش توضیحات)</h3>
	<p>
		این بخش به شما کمک میکند تا توضیحاتی در مورد سایت خود ارائه دهید
	</p>
	<p>
		شما میتوانید این بخش را خاموش یا روشن کنید
	</p>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<div class="togglebutton col-sm-12 ">
					<label class="col-sm-12" style="color: rgba(0, 0, 0, 0.87)">
						<?php $id = 'HomeDescriptionStatus' ?>
						<label for="<?= $id ?>" class="col-sm-5 control-label" style="color: RGB(170, 170, 170);">فعال
							سازی یا غیر فعال سازی بخش توضیحات</label>
						<input <?php
							
							
							if ( ! empty( $options->{$id} ) ) {
								echo 'checked=""';
							}
						?> type="checkbox" value="enable" class="col-md-6" id="<?= $id ?>" name="<?= $id ?>">
						<span>با استفاده از این تنظیم میتوانید بخش توضیحات صفحه ی اول را فعال یا غیر فعال کنید</span>
					</label>
				
				</div>
			
			</div>
		</div>
	
	</div>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'HomeDescriptionH1';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">تیتر بخش توضیحات</label>
				<div class="col-md-6">
					<input type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
					       title="" required="required" value="<?= $options->{$id} ?>">
				</div>
				<span> تیتر بخش توضیحات صفحه ی اول سایت را میتوانید از این بخش تغییر دهید(تغییرات پس از ذخیره سازی بلافاصله اعمال خواهد شد)</span>
			
			</div>
		</div>
	
	</div>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'HomeDescriptionP';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">متن بخش توضیحات</label>
				<div class="col-md-6">
							<textarea type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
							          title="" required="required"><?= $options->{$id} ?></textarea>
				</div>
				<span> متن بخش توضیحات صفحه ی اول سایت را میتوانید از این بخش تغییر دهید(تغییرات پس از ذخیره سازی بلافاصله اعمال خواهد شد)</span>
			
			</div>
		</div>
	
	</div>


</div>
<!-- شخصی سازی ظاهر سایت -->
<div class="card" style="margin-top: 20px">
	<h3>شخصی سازی ظاهر سایت</h3>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<p>در این ورودی هر نوع خصیصه ای که نیاز دارید برای ظاهر سایت به صورت کدهای CSS درج نمایید، این کدها پس از
				آخرین فایل CSS به صورت یک فایل جداگانه در سایت لود خواهد شد</p>
			<p>
				این کدها فقط در بخش رویه ی سایت(فرانت اند) اعمال میشوند
			</p>
			<div class="form-group">
				<?php
					$id = 'FrontendCustomCss';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">css Code</label>
				<div class="col-md-12">
							<textarea type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
							          title="" rows="30"><?= $options->{$id} ?></textarea>
				</div>
			
			
			</div>
		</div>
	
	</div>
	
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<p>در این ورودی هر نوع خصیصه ای که نیاز دارید برای ظاهر سایت به صورت کدهای javascript/jquery درج نمایید، این
				کدها پس از آخرین فایل js به صورت یک فایل جداگانه در سایت لود خواهد شد</p>
			<p>
				این کدها فقط در بخش رویه ی سایت(فرانت اند) اعمال میشوند
			</p>
			<p style="color:darkred;font-weight: 600">
				اخطار: اگر در مورد این کدها چیزی نمیدانید، این بخش را رها کنید، در صورت دستکاری این بخش، ممکن است بخش
				هایی از جلوه های ویزه ی سایت از کار بیفتد
			</p>
			<div class="form-group">
				<?php
					$id = 'FrontendCustomJs';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">JS Code</label>
				<div class="col-md-12">
							<textarea type="text" name="<?= $id ?>" id="<?= $id ?>" class="form-control"
							          title="" rows="30"><?= $options->{$id} ?></textarea>
				</div>
			
			
			</div>
		</div>
	
	</div>
</div>
<!-- متن قوانین سایت -->
<div class="card" style="margin-top:20px">
	<h3>متن قوانین سایت</h3>
	<p>متنی که در این بخش می نویسید، در صفحه ی قوانین سایت ظاهر می شود.</p>
	<p>لینک قوانین سایت در فوتر سایت است</p>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-12">
			<div class="form-group">
				<?php
					$id = 'LawDescriptionP';
				?>
				<label for="<?= $id ?>" class="col-sm-2 control-label">متن بخش قوانین</label>
				<div class="col-md-6">
					<?= \YiiMan\YiiBasics\widgets\tiny\tinyEditorWidget::widget(
						[ 'name' => $id , 'value' => $options->{$id} ]
					) ?>
					
				</div>
				<span></span>
			</div>
		</div>
	
	</div>
</div>
