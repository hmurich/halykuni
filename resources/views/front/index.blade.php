<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" > <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Интерактивная карта общественного контроля </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="/front/css/highlight.css">			<!-- ===This Style sheet for Highlight === -->
		<link rel="stylesheet" href="/front/css/Pe-icon-7-stroke.css">			<!-- ===This Style sheet for Stoke Icon === -->
		<link rel="stylesheet" href="/front/css/meanmenu.css">				<!-- ===This Style sheet for Responsive Menu=== -->
		<link rel="stylesheet" href="/front/css/animate.css">				<!-- ===This Style sheet for Animations=== -->
		<link rel="stylesheet" href="/front/css/owl.carousel.css">			<!-- ===This Style sheet for Owl Carousel=== -->
		<link rel="stylesheet" href="/front/css/owl.theme.css">			<!-- ===This Style sheet for Owl Carousel=== -->
		<link rel="stylesheet" href="/front/css/font-awesome.min.css">		<!-- ===This Style sheet for Font Awesome fonts & icons=== -->
        <link rel="stylesheet" href="/front/css/bootstrap.min.css">		<!-- ===This Style sheet for Bootstrap classes=== -->
        <link rel="stylesheet" href="/front/css/style.css">				<!-- ===This Style sheet for Styling the full template=== -->
        <link rel="stylesheet" href="/front/css/responsive.css">			<!-- ===This Style sheet for making the template responsive for all devices=== -->
        <script src="/front/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>


		<!-- ___Start Home One Page___ -->
		<div class="container-fluid home-1" id="container-full">
			<div class="row">

				<!-- ___Start Left Menu___ -->
				<div class="col-md-2 no-padding wow slideInLeft">
					<div id="left-sidebar">
						<div class="sidebar-menu">
							<div class="logo wow bounceIn" data-wow-delay="1.5s">
								<a href="index.html"><img src="/front/images/logo.png" alt="HalykUni" /></a>
							</div>
							<!-- End Logo -->


							<!-- ___Start Latest Post___ -->
							<div class="latest-post-area toogle-sidebar-sections">
								<div class="latest-post-head">
									<a href="#0" class="accordion-toggle">Фильтр <span class="toggle-icon"><i class="fa fa-bars"></i></span></a>
									<div class="accordion-content">
										<div class="menu-body">

											  <input type="text" class="form-control" placeholder="Поиск организаций" />
											  <ul>
											  <li ><a href="#0" class="accordion-toggle" >Категория <span class="toggle-icon"><i class="fa fa-bars"></i></span></a>
											  	<div class="accordion-content">
											  		<div class="menu-body">
			                                           <ul >
    														<li><a href="#">Медицина</a></li>
    														<li><a href="#">Образование</a></li>
														</ul>
			                                         </div>
												</div>
												</li>
											</ul>
										</div><!-- End Latest Post Body -->
									</div><!-- End According Content -->
								</div><!-- End Latest Post Head -->
							</div>
							<!-- End Latest Post Area -->

							<!-- ___Start Menu Area___ -->
							<div id="menu-area" class="menu-area toogle-sidebar-sections">
								<div class="menu-head">
									<a href="#0" class="accordion-toggle">Меню <span class="toggle-icon"><i class="fa fa-bars"></i></span></a>
									<div class="accordion-content">
										<div class="menu-body">
											<ul>
												<li ><a href="#0">Консультация</a></li>
												<li><a href="about.html">Помощь</a></li>
											</ul>
										</div><!-- End Menu Body -->
									</div><!-- End According Content -->
								</div><!-- End Menu Head -->
							</div>
							<!-- End Menu Area -->

							<!-- ___Start Menu Area___ -->
							<div id="menu-area" class="menu-area toogle-sidebar-sections">
								<div class="menu-head">
									<a href="#0" class="accordion-toggle">О карте <span class="toggle-icon"><i class="fa fa-bars"></i></span></a>
									<div class="accordion-content">
										<div class="menu-body">
											<ul>
												<li><a href="about.html">Информация</a></li>
											</ul>
										</div><!-- End Menu Body -->
									</div><!-- End According Content -->
								</div><!-- End Menu Head -->
							</div>
							<!-- End Menu Area -->

						</div><!-- End Sidebar Menu -->
					</div><!-- End Menu Left -->
				</div><!-- End Column -->
				<!-- End Left Menu -->

				<!-- ___Start Column___ -->
				<div class="col-md-10 no-padding wow  slideInRight">

					<!-- ___Start Top Bar___ -->
					<div class="top-bar wow slideInDown " data-wow-delay="1.5s">
						<div class="top-bar-head">
							<div class="search">
								<i class="pe-7s-search showSingle" id="1"></i>
								<p>Ищете что-то?</p>
							</div>
							<div class="login-user pull-right showSingle" id="2">
								<i class="pe-7s-mail"></i>
							</div>

							<div class="login-mail pull-right showSingle" id="3">
								<i class="pe-7s-user"></i>
							</div>
						</div>
						<!-- End Top Bar Head -->

						<!-- ___Start Top Bar Body___ -->
						<div class="top-bar-body">
							<div class="search-body targetDiv" id="div1">
								<p>Поиск </p>
								<form>
									<input type="text" class="form-control no-radius" placeholder="Впишите сюда |">
								</form>
							</div>

							<!-- ___Start Top Bar Login Body___ -->
							<div class="user-body targetDiv" id="div2">
								<div class="row">
									<div class="col-md-6">
										<div class="login-account">
											<p>Вход</p>
											<form>
												<div class="form-group">
													<input type="text" class="form-control no-radius" placeholder="User Name">
												</div>
												<div class="input-group">
													<input type="text" class="form-control no-radius" placeholder="Password">
													<span class="input-group-btn">
														<button class="btn btn-default" type="button">Войти</button>
													</span>
												</div><!-- Input Group -->
												<div class="forgot-pass">Забыли <a href="#0">пароль?</a></div>
											</form>
										</div><!-- End Login Account -->
									</div><!-- End Column -->

									<div class="dashed-divider"></div>
									<div class="col-md-6">
										<div class="register">
											<p>Регистрация</p>
											<button type="submit" class="btn btn-default form-control no-radius">Зарегистрироваться</button>
										</div>
									</div><!-- End Column -->
								</div><!-- End Row -->
							</div>
							<!-- End Top Bar Login Body -->

							<!-- ___Start Mail Body___ -->
							<div class="mail-body targetDiv" id="div3">
								<div class="row">

									<!-- ___Start Mail Contact___ -->
									<div class="col-md-6">
										<div class="mail-contact">
											<h4>Контакты</h4>
											<div class="row">
												<div class="col-md-3 col-xs-4 no-padding">
													<p class="address"><strong>Адресс :</strong></p>
													<p><strong>Почта :</strong> </p>
													<p><strong>Телефон :</strong> </p>
												</div>
												<div class="col-md-9 col-xs-8 no-padding">
													<p class="address"> 123 Web Street, </p>
													<p> info@octagon.com</p>
													<p> +7 755 855 59 96</p>
												</div>
											</div>
										</div><!-- End Mail Contact -->
									</div><!-- End Column -->

									<div class="dashed-divider"></div>
									<!-- ___Start Follow Us___ -->
									<div class="col-md-6">
										<div class="mail-follow-us">
											<h4>Социальные сети</h4>
											<ul>
												<li>
													<a href="#0" class="connect-with-us facebook">
														<i class="fa fa-facebook"></i>

														<div class="plus">
															<i class="fa fa-plus"></i>
														</div>
													</a><!-- End Facebook -->
												</li>
												<li>
													<a href="#0" class="connect-with-us google-plus">
														<i class="fa fa-google-plus"></i>

														<div class="plus">
															<i class="fa fa-plus"></i>
														</div>
													</a><!-- End Google-plus -->
												</li>
												<li>
													<a href="#0" class="connect-with-us twitter">
														<i class="fa fa-twitter"></i>

														<div class="plus">
															<i class="fa fa-plus"></i>
														</div>
													</a><!-- End Twitter -->
												</li>
												<li>
													<a href="#0" class="connect-with-us linkedin">
														<i class="fa fa-linkedin"></i>

														<div class="plus">
															<i class="fa fa-plus"></i>
														</div>
													</a><!-- End Linkedin -->
												</li>
											</ul>
										</div><!-- End Mail Follow us -->
									</div><!-- End Column -->
								</div><!-- End Row -->
							</div><!-- End Mail Body -->
						</div><!-- End Top Bar Body -->
					</div>
					<!-- End Top Bar -->

					<!-- ___Start Category Nav___ -->
					<div class="category-nav wow slideInRight " data-wow-delay="0.5s">
						<div id="mega-menu" class="mega-menu">
							<ul>
								<!-- ___Start Category Nav Life Style___ -->
								<li id="life-style" class="mega-menu-li life-style"><a href="#0">Жалоба</a>

								</li>
								<!-- End Category Nav Life Style -->

								<!-- ___Start Category Nav Travel___ -->
								<li id="travel" class="mega-menu-li travel"><a href="#0">Отзывы</a>

								</li>
								<!-- End Category Nav Travel -->

								<!-- ___Start Category Nav Coding___ -->
								<li id="coding" class="mega-menu-li coding"><a href="#0">Обсуждения</a>

								</li>
								<!-- End Category Nav Travel -->

								<!-- ___Start Category Nav Music___ -->
								<li id="music" class="mega-menu-li music"><a href="#0">Новости</a>

								</li>
								<!-- End Category Nav Music -->

								<!-- ___Start Category Nav Sports___ -->
								<li id="sports" class="mega-menu-li sports"><a href="#0">Суммы</a>

								</li>
								<!-- End Category Nav Sports -->

								<!-- ___Start Category Nav Design___ -->
								<li id="design" class="mega-menu-li design"><a href="#0">ЮрСоветник</a>

								</li>
								<!-- End Category Nav Design -->

								<!-- ___Start Category Nav Mobile___ -->
								<li id="mobile" class="mega-menu-li mobile"><a href="#0">Мой город</a>

								</li>
								<!-- End Category Nav Mobile -->

								<!-- ___Start Category Nav Health___ -->
								<li class="mega-menu-li health"><a href="#0">Как искать?</a>

						</div>
					</div>
					<!-- End Category Nav -->


					<!-- ___Main Content___ -->
					<div class="main-content wow "style="padding:0">
						<div class="main-slider">
                            <div id="yandex_map" style="    width: 100%; height: 500px;"></div>
						</div> <!-- End Main Slider -->
					</div> <!-- End Main Content -->




					<div class="footer text-center">
						<p>copyrights © 2018</p>
					</div>

				</div><!-- End Column -->
			</div><!-- End Row -->
		</div><!-- End Container -->



        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=package.full" type="text/javascript"></script>


        <script src="/front/js/vendor/jquery.min.js"></script>
        <script src="/front/js/scripts.js"></script>				<!-- ===This Script for Custom Script=== -->
        <script src="/front/js/owl.carousel.min.js"></script>			<!-- ===This Script for Owl Carousel=== -->
        <script src="/front/js/bootstrap.min.js"></script>			<!-- ===This Script for Bootstrap=== -->
        <script src="/front/js/wow.min.js"></script>				<!-- ===This Script for Wow JS=== -->
        <script src="/front/js/jquery.meanmenu.min.js"></script>		<!-- ===This Script for Main Menu=== -->
		<script src="/front/js/jquery.jscroll.js"></script>

        <script src="/front/js/jquery.jscroll.js"></script>
        <script type="text/javascript" src="{{ URL::asset('front/js/jquery-2.2.3.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('front/js/map.js') }}" ></script>
		<script>
			jQuery(document).ready(function($) {
				jQuery('.category-nav ').meanmenu();

				  $(".owl-demo").owlCarousel({
                      navigation : false, // Show next and prev buttons
                      slideSpeed : 300,
                      paginationSpeed : 400,
                      singleItem:true
                      // "singleItem:true" is a shortcut for:
                      // items : 1,
                      // itemsDesktop : false,
                      // itemsDesktopSmall : false,
                      // itemsTablet: false,
                      // itemsMobile : false
                  });
			});
		</script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
