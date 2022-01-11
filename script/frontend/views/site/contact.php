<?php

/* @var $this yii\web\View */
/**
 * @var $menus [] منو ها
 */
$this->title = 'تماس با ما';
	

?>
<section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100">
    <div class="shell">
        <div class="range range-xs-center">
            <div class="cell-md-8">
                <h4 class="font-default text-center">با ما در ارتباط باشید</h4>
                <p class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                <!-- RD Mailform-->
                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="#" class="rd-mailform form-contact-line text-left offset-top-35">
                    <div class="form-inline-flex">
                        <div class="form-group">
                            <label for="contact-name-2" class="form-label form-label-outside">نام</label>
                            <input id="contact-name-2" type="text" placeholder="نام شما" name="name" data-constraints='@Required(message = "وارد کردن نام الزامی است!")' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact-username" class="form-label form-label-outside">نام خانوادگی</label>
                            <input id="contact-username" type="text" placeholder="نام خانوادگی شما" name="lastname" data-constraints='@Required(message = "وارد کردن نام خانوادگی الزامی است!")' class="form-control">
                        </div>
                    </div>
                    <div class="form-group offset-top-15">
                        <label for="message" class="form-label form-label-outside">پیام شما</label>
                        <textarea id="message" placeholder="پیام خود را اینجا بنویسید" name="message" data-constraints='@Required(message = "وارد کردن پیام الزامی است!")' class="form-control"></textarea>
                    </div>
                    <div class="offset-top-15">
                        <div class="form-inline-flex">
                            <div class="form-group">
                                <label for="contact-email-2" class="form-label form-label-outside">ایمیل</label>
                                <input id="contact-email-2" type="email" placeholder="ایمیل خود را وارد کنید" name="email" data-constraints='@Email(message = "ایمیل وارد شده نامعتبر است!") @Required(message = "وارد کردن ایمیل الزامی است!")' class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-lighter btn-fullwidth">ارسال پیام</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="cell-md-4 offset-top-50 offset-md-top-0 text-left">
                <aside class="inset-lg-left-70">
                    <div class="range">
                        <div class="cell-xs-6 cell-md-12">
                            <div class="h6 text-uppercase">ما را دنبال کنید</div>
                            <div class="text-subline offset-top-15"></div>
                            <div class="offset-top-25">
                                <ul class="list-inline">
                                    <li><a href="#" class="icon icon-xs link-gray-light fa-facebook"></a></li>
                                    <li><a href="#" class="icon icon-xs link-gray-light fa-twitter"></a></li>
                                    <li><a href="#" class="icon icon-xs link-gray-light fa-google-plus"></a></li>
                                    <li><a href="#" class="icon icon-xs link-gray-light fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
                            <div class="h6 text-uppercase">تلفن</div>
                            <div class="text-subline offset-top-15"></div>
                            <div class="offset-top-25">
                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs icon-primary text-middle mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a href="callto:#" class="link-default ltr_text">+98 912 345 67 89</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                            <div class="h6 text-uppercase">آدرس</div>
                            <div class="text-subline offset-top-15"></div>
                            <div class="offset-top-25 unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-primary text-middle mdi mdi-map-marker"></span></div>
                                <div class="unit-body"><a href="#" class="link-default">تبریز، ولیعصر، جنب بانک ملت، پلاک 789</a></div>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                            <div class="h6 text-uppercase">ساعات کاری</div>
                            <div class="text-subline offset-top-15"></div>
                            <div class="offset-top-25 unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-primary mdi mdi-clock text-middle"></span></div>
                                <div class="unit-body"><span class="text-dark inset-left-5">9 صبح - 10 شب</span></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

