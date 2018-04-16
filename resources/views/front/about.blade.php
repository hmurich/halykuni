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


					<!-- ___Start About Octagon___ -->
					<div class="main-content">
						<div class="row">
							<div class="col-md-12 w-100">
								<div class="about">
									<div class="about-title text-center">
										<h1>Школа № 22</h1>
										<p>Школа-лицей № 22	</p>
									</div><!-- End About title -->

									<!-- ___Start About Content___ -->
									<div class="about-content">
										<img class="img-responsive" src="/front/images/about-octagon.jpg" alt="..." />
											<p>A new theory that could yield more-reliable communication protocols for digital devices has been developed by researchers led by an Indian-origin scientist.Communication protocols for digital devices are very efficient but also very brittle: They require information to be specified in a precise order with a precise number of bits. If sender and receiver - say, a computer and a printer - are off by even a single bit relative to each other, communi cation between them breaks do.<br><br>

											Similarly, the first topic Sudan and his colleagues began investigating is compression, or the minimum number of bits that one device would need to send another in order to convey all the information in a data file.Existing data compression schemes do exploit statistical regularities in data.<br><br>

											Another Chinese smartphone brand, Vivo has launched its product in India Vivo has bought their slimmest smart phone called Vivo X5 Max to the market for a high price tag of Rs 32,980. The Vivo X5 Max measures just 4.75mm thick which makes it slimmer than the Gionee S5.1 which is 5.1mm thick as well as the Oppo R5 which is 4.85mm thick.</p>
									</div>
									<!-- End About Content -->


								</div>
								<!-- End About -->

							<!-- ___Start Column___ -->
							<div class="text-center">
								<div class=" w-100">
											<div class="sidebar-widget sidebar-tab">
												<div role="tabpanel">
													<!-- Nav Tabs -->
													<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Диаграмма</a></li>
														<li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Сумма</a></li>
														<li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Написать жалобу</a></li>
													</ul>

													<!-- ___Tab Content___ -->
													<div class="tab-content">
														<!-- ___Tab Pane Popular___ -->
														<div role="tabpanel" class="tab-pane fade in active" id="popular">
															<div id="diagram"></div>
														</div>
														<!-- End Tab Pane Popular -->

														<!-- ___Tab Pane Video___ -->
														<div role="tabpanel" class="tab-pane fade" id="video">
															<ul>
																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ушло 2 млн тг </h3>
																				<span>Январь 20, 2015</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cupiditate laborum, unde dolorum magni ipsa et, distinctio voluptates voluptatem, voluptate esse libero quis nobis voluptatibus officiis nostrum adipisci officia asperiores!</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ушло 2 млн тг </h3>
																				<span>Январь 20, 2015</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cupiditate laborum, unde dolorum magni ipsa et, distinctio voluptates voluptatem, voluptate esse libero quis nobis voluptatibus officiis nostrum adipisci officia asperiores!</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ушло 2 млн тг </h3>
																				<span>Январь 20, 2015</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cupiditate laborum, unde dolorum magni ipsa et, distinctio voluptates voluptatem, voluptate esse libero quis nobis voluptatibus officiis nostrum adipisci officia asperiores!</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>
															</ul>
														</div>
														<!-- End Tab Pane Video -->

														<!-- ___Tab Pane Tag___ -->
														<div role="tabpanel" class="tab-pane fade" id="tag">
															<div class="col-md-12 w-100">
																<div class="contact bg-box-shadow">
																	<div class="contact-logo text-center">
																		<i class="pe-7s-mail"></i>
																		<p>Написать жалобу</p>
																	</div><!-- End Contact Logo -->

																	<!-- ___Start Contact Form___ -->
																	<div class="contact-form">
																		<div class="row">
																			<form>

																				<!-- ___Input .Name .Email. Website___ -->
																				<div class="col-md-6">
																					<div class="form-group">
																						<label for="name">Ваше имя</label>
																						<input type="text" class="form-control" id="name" name="name" >
																					</div>

																					<div class="form-group">
																						<label for="email">Ваша пчота</label>
																						<input type="text" class="form-control" id="email" name="email" >
																					</div>

																					<div class="form-group">
																						<label for="web">Ваш номер</label>
																						<input type="text" class="form-control" id="web" name="web" >
																					</div>
																				</div><!-- End Column 6 -->

																				<!-- ___Message & Send It___ -->
																				<div class="col-md-6">

																					<div class="form-group">
																						<label for="message">Сообщения</label>
																						<textarea class="form-control" rows="7" id="message" name="message" ></textarea>
																					</div>
																					<div class="form-group">
																						<button type="submit" class="button btn btn-default" >Отправить</button>
																					</div>
																				</div><!-- End Column 6 -->
																			</form><!-- End Form -->
																		</div><!-- End Row -->
																	</div><!-- End Contact Form -->




																</div><!-- End Contact -->

																<!-- ___Start Map___ -->
																<div class="row">
																	<div class="col-md-12">

																		<h3 class="map-title">Адрес учережления</h3>
																		<div class="mm-google-map bg-box-shadow common-border">
																			<div id="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A758d2c5a33155753f61f8263e6a39e84fd9952575915a6209f307670a228a75f&amp;width=100%25&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script></div>
																		</div>

																	</div>
																</div><!-- End Row -->

															</div>
														</div><!-- End Tab Pane Tag-->
													</div><!-- End Tab Content -->
												</div><!-- End Tab Panel -->
											</div><!-- End Side Tab -->

											<!-- ___Start Sidebar___ -->
											<div class="sidebar-widget sidebar-about">
												<h3>Рукаводство</h3>
												<div class="about-image">
													<img class="img-responsive" src="/front/images/widget/sidebar-about.jpg" alt="" />
												</div>
												<p>Octagon is one of the excellent blog in the World, Because Octogon Have an Uniqe and interesting post. so It give Treat for visiters eyes.</p>
											</div> <!-- End Side About -->

											<!-- ___Start Sidebar Slider___ -->
											<div class="sidebar-widget sidebar-slider">
												<div id="sidebar-slide-post" class="carousel slide" data-ride="carousel">
													<!-- ___Wrapper for Slides___ -->
													<div class="carousel-inner" role="listbox">
														<div class="item active">
															<img class="img-responsive" src="/front/images/about-octagon.jpg" alt="">
														</div>
														<div class="item">
															<img class="img-responsive" src="/front/images/about-octagon.jpg" alt="">
														</div>
														<div class="item">
															<img class="img-responsive" src="/front/images/about-octagon.jpg" alt="">
														</div>
													</div>

													<!-- Controls -->
													<div class="slider-controls">
														<a class="left carousel-control" href="#sidebar-slide-post" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="right carousel-control" href="#sidebar-slide-post" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div> <!-- End Carousel -->
											</div> <!-- End Sidebar Slider -->

											<!-- ___Start Archive___ -->
											<div class="sidebar-widget sidebar-archive">
												<h3>Архив событии</h3>
												<div class="custom-select">
													<select class="form-control no-radius">
														<option>Выберите месяц</option>
														<option>Январь</option>
														<option>Февраль</option>
														<option>Март</option>
														<option>Апрель</option>
														<option>Май</option>
														<option>Июнь</option>
														<option>Июль</option>
														<option>Август</option>
														<option>Сентябрь</option>
														<option>Октябрь</option>
														<option>Ноябрь</option>
														<option>Декабрь</option>
													</select>
												</div>
												<div class="row">
													<!-- ___Start Octagon Author___ -->
													<div class="octagon-author text-center">
														<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
															<div class="author-info border-left-one-light">
															<img class="img-responsive" src="/front/images/authors/author-1.jpg" alt="" />
															<p class="name">СОбытия 1</p>
																<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem officiis ab aut excepturi qui et quam tempora mollitia natus beatae deleniti quod cumque laudantium, dolor hic error nisi ea facere!</p>
																<a href="#0">Подробнее</a>
															</div>
														</div><!-- End Column -->

														<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
															<div class="author-info">
															<img class="img-responsive" src="/front/images/authors/author-2.jpg" alt="" />
															<p class="name">СОбытия 2</p>
																<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem officiis ab aut excepturi qui et quam tempora mollitia natus beatae deleniti quod cumque laudantium, dolor hic error nisi ea facere!</p>
																<a href="#0">Подробнее</a>
															</div>
														</div><!-- End Column -->

														<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
															<div class="author-info">
															<img class="img-responsive" src="/front/images/authors/author-3.jpg" alt="" />
															<p class="name">СОбытия 3</p>
																<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem officiis ab aut excepturi qui et quam tempora mollitia natus beatae deleniti quod cumque laudantium, dolor hic error nisi ea facere!</p>
																<a href="#0">Подробнее</a>
															</div>
														</div><!-- End Column -->
													</div><!-- End Octagon Author -->
											</div>
											</div><!-- End sidebar-archive-->



											<!-- ___Start Subscribe___ -->
											<div class="sidebar-widget sidebar-subscribe">
												<div class="mail text-center">
													<i class="pe-7s-mail"></i>
												</div>
												<h3>Подписаться на рассылку</h3>
												<div class="form-group">
													<input type="text" class="form-control no-radius" placeholder="Ваша почта" />

													<div class="subscribe-btn text-right">
														<a href="#0">Подписаться</a>
													</div>
												</div>
											</div><!-- End Subscribe -->

								</div> <!-- End Column -->
							</div><!-- Content -->
						</div> <!-- End Row -->
					</div>
								<!-- ___Start Author___ -->
								<div class="author">
									<div class="author-heading">
										<h2>Новости</h2>
									</div>
									<div class="row">
										<!-- ___Start Octagon Author___ -->
										<div class="octagon-author text-center">
											<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
												<div class="author-info border-left-one-light">
												<img class="img-responsive" src="/front/images/authors/author-1.jpg" alt="" />
												<p class="name">Новость 1</p>
													<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia deserunt dolore, illum, iusto, dignissimos omnis aliquam maxime magnam reprehenderit provident! Magni similique, animi modi dolorem quibusdam, sed beatae obcaecati.</p>
													<a href="#0">Подробнее</a>
												</div>
											</div><!-- End Column -->

											<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
												<div class="author-info border-left-one-light">
												<img class="img-responsive" src="/front/images/authors/author-1.jpg" alt="" />
												<p class="name">Новость 1</p>
													<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia deserunt dolore, illum, iusto, dignissimos omnis aliquam maxime magnam reprehenderit provident! Magni similique, animi modi dolorem quibusdam, sed beatae obcaecati.</p>
													<a href="#0">Подробнее</a>
												</div>
											</div><!-- End Column -->

											<div class="col-lg-4 col-md-4 col-sm-4 no-padding">
												<div class="author-info border-left-one-light">
												<img class="img-responsive" src="/front/images/authors/author-1.jpg" alt="" />
												<p class="name">Новость 1</p>
													<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia deserunt dolore, illum, iusto, dignissimos omnis aliquam maxime magnam reprehenderit provident! Magni similique, animi modi dolorem quibusdam, sed beatae obcaecati.</p>
													<a href="#0">Подробнее</a>
												</div>
											</div><!-- End Column -->
										</div><!-- End Octagon Author -->
									</div><!-- End Row -->
								</div><!-- End Author -->
							</div>
							<!-- End Column -->

<!-- End Main Content -->



					<!-- ___Start Bottom___ -->
					<div class="container-flucid">
							<div class="bottom">
								<div class="row margin-zero">

								<!-- End Column -->

								<!-- ___Contact Us___ -->
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="bottom-contact widget">
										<h3>Контакты</h3>
										<div class="contact-info">
											<p><strong>Email :</strong> info@info.kz</p>
											<p><strong>Тел :</strong> +7 7172 54 65 56</p>
										</div>
									</div>
								</div>
								<!-- End Column -->

								<!-- ___News Letter___ -->
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="newsletter widget">
										<h3>Подписка</h3>
										<div class="input-group">
											<input type="text" class="form-control no-radius" placeholder="Ваша почта">
											<span class="input-group-btn  no-radius">
												<button class="btn btn-default" type="button">Подписаться</button>
											</span>
										</div><!-- /input-group -->
										<p>Подписаться на новсти учереждения</p>
									</div>
								</div>
								<!-- End Column -->

								<!-- ___Start Social Icons Column___ -->
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<!-- ___Start Social Icons___ -->
									<div class="bottom-social widget">
										<h3>Социальная сеть </h3>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#0" class="connect-with-us facebook">
														<i class="fa fa-facebook"></i>
													</a>
												</li>

												<li>
													<a href="#0" class="connect-with-us twitter">
														<i class="fa fa-twitter"></i>
													</a>
												</li>

												<li>
													<a href="#0" class="connect-with-us youtube">
														<i class="fa fa-youtube-play"></i>
													</a>
												</li>
												<li>
													<a href="#0" class="connect-with-us instagram">
														<i class="fa fa-instagram"></i>
													</a>
												</li>
											</ul>
										</div>
										<p>Будьте вкурсе всех новостей</p>
									</div><!-- End Social Icons -->
								</div><!-- End Column -->
							</div><!-- End Row -->
						</div>
						<!-- End Bottom -->
					</div>

					<div class="footer text-center">
						<p>copyrights © 2018</p>
					</div>

				</div><!-- End Column -->
			</div><!-- End Row -->
		</div><!-- End Container -->


        <script src="/front/js/vendor/jquery.min.js"></script>
        <script src="/front/js/scripts.js"></script>				<!-- ===This Script for Custom Script=== -->
        <script src="/front/js/owl.carousel.min.js"></script>			<!-- ===This Script for Owl Carousel=== -->
        <script src="/front/js/bootstrap.min.js"></script>			<!-- ===This Script for Bootstrap=== -->
        <script src="/front/js/wow.min.js"></script>				<!-- ===This Script for Wow JS=== -->
        <script src="/front/js/jquery.meanmenu.min.js"></script>		<!-- ===This Script for Main Menu=== -->
		<script src="/front/js/jquery.jscroll.js"></script>
		<script src="/front/js/highcharts.js"></script>


		<script>
			jQuery(document).ready(function($) {
				jQuery('.category-nav ').meanmenu();
			});
		</script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
