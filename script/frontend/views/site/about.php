<?php
	
	/* @var $this yii\web\View */
	/**
	 * @var $menus [] منو ها
	 */
	$this->title = 'درباره ی ما';
	
	$this->registerMetaTag(
		[
			'name'    => 'description' ,
			'content' => 'تیم طراحی سایت توکاپس | 05138846411 | تلگرام YiiMan_support'
		]
	
	);
	$this->registerMetaTag(
		[
			'name'    => 'keywords' ,
			'content' => 'طراحی سایت مشهد,سئو مشهد,ایده پردازی و تحلیل,ایده پردازی,قیمت طراحی سایت,قیمت سایت,تعرفه ی سایت,تولید سایت,طراحی اپلیکیشن مشهد'
		]
	
	);
	
	$this->registerLinkTag(
		[
			'rel'  => 'canonical' ,
			'href' => 'https://YiiMan.ir/about'
		]
	);
?>
<body class="body">
<div class="wrapper">
	<div class="lines-container click-through">
		<div data-w-id="266e608a-802b-d714-c654-c6bc624acdd0" class="line-col first"></div>
		<div data-w-id="266e608a-802b-d714-c654-c6bc624acdd1" class="line-col second"></div>
		<div data-w-id="266e608a-802b-d714-c654-c6bc624acdd2" class="line-col third"></div>
		<div data-w-id="266e608a-802b-d714-c654-c6bc624acdd3" class="line-col fourth"></div>
	</div>
	<?= $this->render(
		'navigation' ,
		[
			'menus' => $menus ,
		]
	) ?>
	<header data-w-id="944c7de9-b4f4-06cf-7ff1-a077870a04f0" class="header">
		<div data-w-id="944c7de9-b4f4-06cf-7ff1-a077870a04f1"
		     style="-webkit-transform:translate3d(1000PX, 0PX, 0PX) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-1000PX, 0PX, 0PX) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-1000PX, 0PX, 0PX) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-1000PX, 0PX, 0PX) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
		     class="container-header narrow">
			<div class="container-heading-center"><h1 class="sofia"><?= $menus['menus']['about'] ?></h1>
				<h2 class="bg-heading center"><?= $menus['menus']['about'] ?></h2></div>
		</div>
		<div class="container-image-header large expertise"
		     style="background-image: url('<?= $sec_about['img'] ?>')"></div>
		<a href="#first" data-w-id="944c7de9-b4f4-06cf-7ff1-a077870a04ff" class="scroll-down w-inline-block">
			<div class="vertical-text">پایین</div>
			<img src="<?= $menus['img']['arrow-down'] ?>"
			     width="8" class="image" /></a></header>
	<main>
		<div id="first" class="section">
			<div class="content-section">
				<div class="container-heading-section left">
					<div class="heading">
						<div class="line-h heading"></div>
						<h1 class="sofia"><?= $sec_about['section1']['title'] ?></h1>
						<h2 class="bg-heading"><?= $sec_about['section1']['title'] ?></h2></div>
				</div>
				<div data-duration-in="1" data-duration-out="300" data-easing="ease-in-out" class="tabs process w-tabs">
					<div class="tabs-menu w-tab-menu"><a data-w-tab="Tab 1"
					                                     data-w-id="e012c44e-ce2d-d84b-c6c9-03a7d99e5715"
					                                     class="tab tab-1 w-inline-block w-tab-link w--current">
							<div class="text-tab"><?= $sec_about['section1']['tab-1']['title'] ?></div>
							<div data-w-id="03eefd4d-a555-7eeb-8961-c2f712a98eed" class="pastille"></div>
							<div class="progress-line"></div>
						</a><a data-w-tab="Tab 2" data-w-id="d98d6112-583d-8811-c8ff-2e4b5eccae45"
					           class="tab tab-2 w-inline-block w-tab-link">
							<div class="text-tab"><?= $sec_about['section1']['tab-2']['title'] ?></div>
							<div data-w-id="905ae44c-6e3e-eba8-bf79-e9779b69be07" class="pastille"></div>
						</a><a data-w-tab="Tab 3" data-w-id="e5fca61a-9aa6-bfb8-e075-b5be26c01d17"
					           class="tab tab-3 w-inline-block w-tab-link">
							<div class="text-tab"><?= $sec_about['section1']['tab-3']['title'] ?></div>
							<div data-w-id="3451fb04-93c3-c961-ab91-9a9e15e3a698" class="pastille"></div>
						</a><a data-w-tab="Tab 4" data-w-id="e7443e44-6163-4387-0c84-745cf346bdcb"
					           class="tab tab-4 w-inline-block w-tab-link">
							<div class="text-tab"><?= $sec_about['section1']['tab-4']['title'] ?></div>
							<div data-w-id="bfb4714c-c95e-0f87-c22f-2adc9d3966b0" class="pastille"></div>
						</a></div>
					<div class="tabs-content w-tab-content">
						<div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
							<div class="status-bar in-tabs"></div>
							<div data-w-id="7c801177-7a7b-be6a-c8b3-d42e6ee23ac4" style="height:0PX"
							     class="status-bar-vertical"></div>
							<div data-w-id="505c15d9-97c9-4e1f-9e1a-7c1786faf0be" style="opacity:0"
							     class="container-tab"><h2 class="small-heading stroke-text"
							                               data-ix="title-tabs"><?= $sec_about['section1']['tab-1']['under-title'] ?></h2>
								<div class="col-1-tab" data-ix="content-slide-from-left"><h1><span
												class="subtitle"><?= $sec_about['section1']['tab-1']['right-text'] ?></span><?= $sec_about['section1']['tab-1']['right-text2'] ?>
									</h1></div>
								<div class="col-2-tab" data-ix="content-slide-from-left"><p>
										<?= $sec_about['section1']['tab-1']['desc'] ?>
									</p></div>
								<div id="next-btn-1" class="next-btn link">
									<div class="small-text-next">بعدی</div>
									<div data-w-id="e1acb523-5dce-b11e-3177-9ac9138b100c" class="next-btn-icon">
										<i class="fas fa-arrow-left"></i>
									</div>
								</div>
							</div>
						</div>
						<div data-w-tab="Tab 2" class="w-tab-pane">
							<div class="status-bar in-tabs">
								<div data-w-id="3d20baa9-7942-a142-88a5-ac9cb9a1d77b" style="width:0PX"
								     class="status-bar-current"></div>
							</div>
							<div data-w-id="6c873bac-c87a-4c18-461e-2663c9a49b19" style="height:0PX"
							     class="status-bar-vertical bar-tab-2"></div>
							<div data-w-id="825ad0c5-553e-b0c7-998c-ccb290ce87bb" style="opacity:0"
							     class="container-tab"><h2 class="small-heading stroke-text"
							                               data-ix="title-tabs"><?= $sec_about['section1']['tab-2']['under-title'] ?></h2>
								<div class="col-1-tab" data-ix="content-slide-from-left"><h1><span
												class="subtitle"><?= $sec_about['section1']['tab-2']['right-text'] ?></span><?= $sec_about['section1']['tab-2']['right-text2'] ?>
									</h1></div>
								<div class="col-2-tab"
								     data-ix="content-slide-from-left"><?= $sec_about['section1']['tab-2']['desc'] ?></div>
								<div id="next-btn-2" data-w-id="d0701755-d5e5-c376-2fce-8c38ba4b1e97"
								     class="next-btn link">
									<div class="small-text-next">بعدی</div>
									<div class="next-btn-icon">
										<i class="fas fa-arrow-left"></i>
									</div>
								</div>
							</div>
						</div>
						<div data-w-tab="Tab 3" class="w-tab-pane">
							<div class="status-bar in-tabs">
								<div data-w-id="e4887077-11f3-fdc7-1ce6-22af9717f039" style="width:25%"
								     class="status-bar-current _3"></div>
							</div>
							<div data-w-id="b74a76c3-f733-c8cb-e3f8-e5cabc6084d3" style="height:0PX"
							     class="status-bar-vertical bar-tab-3"></div>
							<div data-w-id="16aa9d9b-ffd4-39b0-a738-bf1c525ba2e1" style="opacity:0"
							     class="container-tab"><h2 class="small-heading stroke-text"
							                               data-ix="title-tabs"><?= $sec_about['section1']['tab-3']['under-title'] ?></h2>
								<div class="col-1-tab" data-ix="content-slide-from-left"><h1><span
												class="subtitle"><?= $sec_about['section1']['tab-3']['right-text'] ?> </span><?= $sec_about['section1']['tab-3']['right-text2'] ?>
									</h1></div>
								<div class="col-2-tab"
								     data-ix="content-slide-from-left"><?= $sec_about['section1']['tab-3']['desc'] ?><a
											href="#services" class="btn-h w-inline-block">
										<div class="line-btn horizontal"></div>
										<div class="btn-txt"><?= $sec_about['section1']['tab-3']['btn-text'] ?></div>
									</a></div>
								<div id="next-btn-3" class="next-btn link">
									<div class="small-text-next">بعدی</div>
									<div class="next-btn-icon">
										<i class="fas fa-arrow-left"></i>
									</div>
								</div>
							</div>
						</div>
						<div data-w-tab="Tab 4" class="w-tab-pane">
							<div class="status-bar in-tabs">
								<div data-w-id="668c0741-4a40-7a13-eb83-1490907f14ca" style="width:50%"
								     class="status-bar-current _4"></div>
							</div>
							<div data-w-id="0e1cf6a2-3f83-6933-db31-e29c4b8e5e34" style="height:0PX"
							     class="status-bar-vertical bar-tab-4"></div>
							<div data-w-id="d419eeb6-241d-990e-1fa0-e509326a3a49" style="opacity:0"
							     class="container-tab"><h2 class="small-heading stroke-text"
							                               data-ix="title-tabs"><?= $sec_about['section1']['tab-4']['under-title'] ?></h2>
								<div class="col-1-tab" data-ix="content-slide-from-left"><h1><span
												class="subtitle"><?= $sec_about['section1']['tab-4']['right-text'] ?></span><?= $sec_about['section1']['tab-3']['right-text2'] ?>
									</h1></div>
								<div class="col-2-tab"
								     data-ix="content-slide-from-left"><?= $sec_about['section1']['tab-4']['desc'] ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="services" class="section dark last">
			<div class="content-section services">
				<div class="container-heading-section left">
					<div class="heading">
						<div class="line-h heading"></div>
						<h1 class="sofia"><?= $sec_about['section2']['title'] ?></h1>
						<h2 class="bg-heading"><?= $sec_about['section2']['title'] ?></h2></div>
				</div>
				<div class="wrapper-services">
					<div data-w-id="b86f2b7f-0aec-e658-bba4-8ebece3a6cb2" style="opacity:0" class="box-services">
						<div class="name-services-container">
							<div class="service-name-center"><img
										src="<?= $sec_about['section2']['card1']['img'] ?>"
										alt="Graphic Design Icon" />
								<h3 class="heading-center"><?= $sec_about['section2']['card1']['title'] ?></h3></div>
							<div class="service-description">
								<div class="text-content"><?= $sec_about['section2']['card1']['desc'] ?> 
								</div>
							</div>
						</div>
						<div class="services-specs">
							<div class="divider-blue"></div>
							<ul class="ul-services w-list-unstyled">
								<?= $sec_about['section2']['card1']['desc2'] ?>
							</ul>
							<a href="services/graphic-design" class="btn-h w-inline-block">
								<div data-w-id="1c59a3d0-4ce1-ec6a-c4e6-8d620586825f" class="line-btn horizontal"></div>
								<div data-w-id="1c59a3d0-4ce1-ec6a-c4e6-8d6205868260"
								     class="btn-txt"><?= $sec_about['section2']['more'] ?>
								</div>
							</a></div>
						<a href="services/graphic-design" class="link-absolute w-inline-block"></a></div>
					<div data-w-id="22b5fdf8-2947-230e-e181-6e01c4228ee5" style="opacity:0" class="box-services second">
						<div class="name-services-container">
							<div class="service-name-center"><img
										src="<?= $sec_about['section2']['card2']['img'] ?>"
										alt="Content Icon" />
								<h3 class="heading-center"><?= $sec_about['section2']['card2']['title'] ?></h3></div>
							<div class="service-description">
								<div class="text-content"><?= $sec_about['section2']['card2']['desc'] ?> 
								</div>
							</div>
						</div>
						<div class="services-specs">
							<div class="divider-blue"></div>
							<ul class="ul-services w-list-unstyled">
								<?= $sec_about['section2']['card2']['desc2'] ?>
							</ul>
							<a href="services/content" class="btn-h w-inline-block">
								<div class="line-btn horizontal"></div>
								<div class="btn-txt"><?= $sec_about['section2']['more'] ?></div>
							</a></div>
						<a href="services/content" class="link-absolute w-inline-block"></a></div>
					<div data-w-id="f0343d81-ce7e-a10b-a9c5-d28dc542fb4f" style="opacity:0" class="box-services">
						<div class="name-services-container">
							<div class="service-name-center"><img
										src="<?= $sec_about['section2']['card3']['img'] ?>"
										alt="Print Icon" />
								<h3 class="heading-center"><?= $sec_about['section2']['card3']['title'] ?></h3></div>
							<div class="service-description">
								<div class="text-content"><?= $sec_about['section2']['card3']['desc'] ?>
								</div>
							</div>
						</div>
						<div class="services-specs">
							<div class="divider-blue"></div>
							<ul class="ul-services w-list-unstyled">
								<?= $sec_about['section2']['card3']['desc2'] ?>
							</ul>
							<a href="services/print" class="btn-h w-inline-block">
								<div class="line-btn horizontal"></div>
								<div class="btn-txt"><?= $sec_about['section2']['more'] ?></div>
							</a></div>
						<a href="services/print" class="link-absolute w-inline-block"></a></div>
					<div data-w-id="133492cc-6d7d-7582-e1ce-90fcc9414b6b" style="opacity:0" class="box-services second">
						<div class="name-services-container">
							<div class="service-name-center"><img
										src="<?= $sec_about['section2']['card4']['img'] ?>"
										alt="Digital Design Icon" />
								<h3 class="heading-center"><?= $sec_about['section2']['card4']['title'] ?></h3></div>
							<div class="service-description">
								<div class="text-content"><?= $sec_about['section2']['card4']['desc'] ?>
								</div>
							</div>
						</div>
						<div class="services-specs">
							<div class="divider-blue"></div>
							<ul class="ul-services w-list-unstyled">
								<?= $sec_about['section2']['card4']['desc2'] ?>
								<li>
									<div class="container-icons"><img
												src="<?= $sec_about['section2']['card4']['social']['icon1'] ?>"
												alt="Shopify icon" class="icon-digital" /><img
												src="<?= $sec_about['section2']['card4']['social']['icon2'] ?>"
												alt="Webflow icon" class="icon-digital" /><img
												src="<?= $sec_about['section2']['card4']['social']['icon3'] ?>"
												alt="Invision Icon" class="icon-digital" /><img
												src="<?= $sec_about['section2']['card4']['social']['icon4'] ?>"
												alt="Invision Icon" width="19" height="19" class="icon-digital" /></div>
								</li>
							</ul>
							<a href="services/digital" class="btn-h w-inline-block">
								<div class="line-btn horizontal"></div>
								<div class="btn-txt"><?= $sec_about['section2']['more'] ?></div>
							</a></div>
						<a href="services/digital" class="link-absolute w-inline-block"></a></div>
				</div>
				<a href="#" class="btn-v anim w-inline-block">
					<div class="line-btn"></div>
					<div><?= $sec_about['section2']['more'] ?></div>
				</a></div>
		</div>
		<div class="section">
			<div class="content-section">
				<div class="container-rows">
					<div class="container-heading-section right">
						<div class="heading right">
							<div class="line-h heading right"></div>
							<h1 class="sofia"><?= $sec_about['section3']['title'] ?></h1>
							<h2 class="bg-heading"><?= $sec_about['section3']['title'] ?></h2></div>
					</div>
					<div class="row-clients w-row">
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img'] ?>"
									alt="Logo Brasserie La Binchoise" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img2'] ?>"
									alt="Logo Maison du Design" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img3'] ?>"
									alt="Logo Google" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img4'] ?>"
									alt="Logo Mundaneum" /></div>
					</div>
					<div class="row-clients w-row">
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img5'] ?>"
									alt="Logo Mons 2015" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img6'] ?>"
									alt="Logo UMons" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img7'] ?>"
									alt="Logo FabLab" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img8'] ?>"
									alt="Logo Hovertone" width="100" /></div>
					</div>
					<div class="row-clients w-row">
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img9'] ?>"
									alt="Logo HellionCat" width="130" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img10'] ?>"
									alt="Logo Crispy Factory" width="100" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img11'] ?>"
									alt="Logo Studio Woy" width="100" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img12'] ?>"
									alt="Logo La Montoise" width="70" /></div>
					</div>
					<div class="row-clients w-row">
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img13'] ?>"
									alt="Logo Mosaïque" width="130" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img14'] ?>"
									alt="Logo Wah Wah Design" width="100" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img15'] ?>"
									alt="Logo Transport &amp; Environment" width="120" /></div>
						<div class="client w-col w-col-3 w-col-small-6 w-col-tiny-6"><img
									src="<?= $sec_about['section3']['img16'] ?>"
									alt="Logo Sparkle" width="60" /></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?= $this->render( 'footerNav' ) ?>
</div>


