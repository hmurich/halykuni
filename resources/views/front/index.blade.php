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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/front/js/vendor/modernizr-2.6.2.min.js"></script>


    </head>
    <body>


		<!-- ___Start Home One Page___ -->
		<div class="container-fluid home-1" id="container-full">
			<div class="row">

				<!-- ___Start Left Menu___ -->
				<div class="col-md-2 no-padding">
					<div id="left-sidebar">
						<div class="sidebar-menu">
							<div class="logo wow bounceIn" data-wow-delay="1.0s">
								<a href="#"><img src="/front/images/logo.png" alt="HalykUni" /></a>
							</div>
							<!-- End Logo -->


							<!-- ___Start Latest Post___ -->
							
							
									<span class="accordion-toggle">Поиск <span class="toggle-icon"><i class="fa fa-search"></i></span></span>
									<div class="accordion-content">
										<div class="menu-body">

											  <input type="text" class="form-control" placeholder="Поиск гос. органов" />
											  
											  <span class="accordion-toggle">По категориям</span>

											  <div class="custom-select filter_rus">
													<select class="form-control">
														<option>Выберите</option>
														<option>Медицина</option>
														<option>Образование</option>
														<option>Акиматы</option>
														<option>ЦОНы</option>
														<option>Университеты</option>
													</select>
												</div>

											<span class="accordion-toggle">По областям</span>

											  <div class="custom-select filter_rus">
													<select class="form-control">
														<option>Выберите</option>
														<option>Акмолинская</option>
														<option>Актюбинская</option>
														<option>Алматинская</option>
														<option>Атырауская</option>
														<option>Восточно-Казахстанская</option>
													</select>
												</div>

											<span class="accordion-toggle">По рейтингу</span>
											<br>
											<div style="margin-left:30px;">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										</div><!-- End Latest Post Body -->
									</div><!-- End According Content -->
								<!-- End Latest Post Head -->
							
							<!-- End Latest Post Area -->


						</div><!-- End Sidebar Menu -->
					</div><!-- End Menu Left -->
				</div><!-- End Column -->
				<!-- End Left Menu -->

				<!-- ___Start Column___ -->
				<div class="col-md-10 no-padding">

					<!-- ___Start Top Bar___ -->
					<div class="top-bar">
						<div class="top-bar-head">
							<div class="search">
								<i class="pe-7s-info showSingle" id="1"></i>
								<p>Получить консультацию</p>
							</div>
							<div class="login-user pull-right showSingle" id="2">
								<p>Регистрация/Вход по ЭЦП</p>
								<i class="pe-7s-user showSingle"></i>
							</div>

						</div>
						<!-- End Top Bar Head -->

						<!-- ___Start Top Bar Body___ -->
						<div class="top-bar-body">
							<div class="search-body targetDiv" id="div1">
								<p>Роботизированная система консультаций "ЮрСоветник" </p>
								<form>
									<input type="text" class="form-control no-radius" placeholder="Впишите сюда ключевые слова Вашего вопроса">
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
													<input type="file" class="form-control no-radius" placeholder="Ваша почта">
												</div>
												<div class="input-group">
													<input type="text" class="form-control no-radius" placeholder="Пароль для ЭЦП">
													<span class="input-group-btn">
														<button class="btn btn-default" type="button">Войти по ЭЦП</button>
													</span>
												</div><!-- Input Group -->
												<div class="forgot-pass">Забыли <a href="#0">пароль?</a></div>
											</form>
										</div><!-- End Login Account -->
									</div><!-- End Column -->

									<div class="dashed-divider"></div>
									<div class="col-md-6">
										<p><b>Регистрация</b></p>
										<div class="register">
											
											<button type="submit" class="btn btn-default form-control no-radius">Зарегистрироваться по ЭЦП</button>
										</div>
									</div><!-- End Column -->
								</div><!-- End Row -->
							</div>
							<!-- End Top Bar Login Body -->

					
						</div><!-- End Top Bar Body -->
					</div>
					<!-- End Top Bar -->

					<!-- ___Start Category Nav___ -->
					<div class="category-nav">
						<div id="mega-menu" class="mega-menu">
							<ul>
								<!-- ___Start Category Nav Life Style___ -->
								<li id="life-style" class="mega-menu-li life-style">

									<a href="#0"><i class="pe-7s-speaker" style="font-size:25px;"></i> Жалоба</a>
									<ul>
										<li>
											<!-- ___Start Menu Wrapper___ -->
											<div class="menu-wrapper">
												<div class="post-tab container-fluid no-padding">
													<div role="tabpanel">
														<div class="row margin-zero">
															<div class="col-md-3 col-sm-3 no-padding">
																<div class="submenu-lists">
																	<h4>Что это значит? <i class="fa fa-info"></i></h4>
																	<!-- ___Nav Tabs___ -->
																	<div class="nav nav-tabs" role="tablist">
																		<div class="list active" role="presentation"><a href="#beauty-care" aria-controls="beauty-care" role="tab" data-toggle="tab">Как подать жалобу?</a></div>

																		<div class="list" role="presentation"><a href="#hair-style" aria-controls="hair-style" role="tab" data-toggle="tab">Что нужно знать при подаче?</a></div>

																	</div><!-- End Nav Tab -->
																</div><!-- End Sub Menu List -->
															</div><!-- End Column -->

															<div class="col-md-9 col-sm-9">
																<!-- ___Tab Content___ -->
																<div class="tab-content">

																	<!-- ___Tab Pane___ -->
																	<div role="tabpanel" class="tab-pane fade in active" id="beauty-care">
																		<div class="row">
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-2.jpg" alt="" />
																						<h3><a href="#0">Если Вы столкнулись с нарушением прав или проявлениями коррупции, можете подать жалобу здесь</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-3.jpg" alt="" />
																						<h3><a href="#0">Для этого найдите государственный орган, в котором Вы столкнулись с данной проблемой</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-4.jpg" alt="" />
																						<h3><a href="#0">В профиле этого органа нажмите на кнопку "Подать жалобу через ЭЦП"</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																		</div>
																	</div><!-- End Tab Panels -->

																	<!-- ___Tab Pane___ -->
																	<div role="tabpanel" class="tab-pane fade" id="hair-style">
																		<div class="row">
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-5.jpg" alt="" />
																						<h3><a href="#0">Для подачи жалобы, Вы должны иметь ЭЦП</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-6.jpg" alt="" />
																						<h3><a href="#0">Ваша жалобы должна быть обоснованной</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-7.jpg" alt="" />
																						<h3><a href="#0">Постарайтесь максимально точно описать Вашу проблему</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																		</div>
																	</div><!-- End Tab Panes -->

																
																</div>
																<!-- End Tab Content-->
															</div><!-- End Column -->
														</div><!-- End Row -->
													</div><!-- End Tab Panel -->
												</div><!-- End Post Tab -->
											</div><!-- End Menu Wrapper -->
										</li>
									</ul>
								</li>
								<!-- End Category Nav Life Style -->

								<!-- ___Start Category Nav Travel___ -->
								<li id="travel" class="mega-menu-li travel"> 
								 <a href="#0"><i class="pe-7s-share" style="font-size:25px;"></i> Список организаций</a>

								</li>
								<!-- End Category Nav Travel -->

								<!-- ___Start Category Nav Music___ -->
								<li id="music" class="mega-menu-li music">
									<a href="#0"><i class="pe-7s-news-paper" style="font-size:25px;"></i>Новости</a>

								</li>
								<!-- End Category Nav Music -->

								<!-- ___Start Category Nav Sports___ -->
								<li id="sports" class="mega-menu-li sports">
									<a href="#0"><i class="pe-7s-diamond" style="font-size:25px;"></i>О бюджете</a>

									<ul>
										<li>
											<!-- ___Start Menu Wrapper___ -->
											<div class="menu-wrapper">
												<div class="post-tab container-fluid no-padding">
													<div role="tabpanel">
														<div class="row margin-zero">
															<div class="col-md-3 col-sm-3 no-padding">
																<div class="submenu-lists">
																	<h4>Что это значит? <i class="fa fa-info"></i></h4>
																	<!-- ___Nav Tabs___ -->
																	<div class="nav nav-tabs" role="tablist">
																		<div class="list active" role="presentation"><a href="#budzhet-main" aria-controls="beauty-care" role="tab" data-toggle="tab">Информация о бюджете</a></div>

																		<div class="list" role="presentation"><a href="#how-to-use-budzhet" aria-controls="hair-style" role="tab" data-toggle="tab">Смотреть по категориям</a></div>

																	</div><!-- End Nav Tab -->
																</div><!-- End Sub Menu List -->
															</div><!-- End Column -->

															<div class="col-md-9 col-sm-9">
																<!-- ___Tab Content___ -->
																<div class="tab-content">

																	<!-- ___Tab Pane___ -->
																	<div role="tabpanel" class="tab-pane fade in active" id="budzhet-main">
																		<div class="row">
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-2.jpg" alt="" />
																						<h3><a href="#0">Здесь Вы сможете узнать всю информацию о суммах, выделенных на определенную организацию</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-3.jpg" alt="" />
																						<h3><a href="#0">Для этого найдите государственный орган, который Вас интересует</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-4.jpg" alt="" />
																						<h3><a href="#0">В профиле этого органа Вы сможете увидеть открытую информацию о его бюджете</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																		</div>
																	</div><!-- End Tab Panels -->

																	<!-- ___Tab Pane___ -->
																	<div role="tabpanel" class="tab-pane fade" id="how-to-use-budzhet">
																		<div class="row">
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-5.jpg" alt="" />
																						<h3><a href="#0">Суммы выделенные на строительство дорог</a></h3>
																						<h3><a href="#0">Суммы выделенные на ремонт школ</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-6.jpg" alt="" />
																						<h3><a href="#0">Суммы выделенные на ремонт поликлинник</a></h3>
																						<h3><a href="#0">Суммы выделенные на чистоту города</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																			<div class="col-md-4 col-sm-4  no-padding">
																				<div class="menu-post">
																					<div class="post">
																						<img class="img-responsive" src="images/mm/mm-post-7.jpg" alt="" />
																						<h3><a href="#0">Просто выберите нужную категорию!</a></h3>
																					</div>
																				</div><!-- End Menu Post -->
																			</div>
																		</div>
																	</div><!-- End Tab Panes -->

																
																</div>
																<!-- End Tab Content-->
															</div><!-- End Column -->
														</div><!-- End Row -->
													</div><!-- End Tab Panel -->
												</div><!-- End Post Tab -->
											</div><!-- End Menu Wrapper -->
										</li>
									</ul>


								</li>
								<!-- End Category Nav Sports -->

						</div>
					</div>
					<!-- End Category Nav -->


					<!-- ___Main Content___ -->
					<div class="main-content" style="padding:0">
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



        <script type="text/javascript" src="//api-maps.yandex.ru/2.0/?load=package.standard&amp;lang=ru-RU" ></script>

        <script type="text/javascript" src="{{ URL::asset('front/js/jquery-2.2.3.min.js') }}" ></script>
        
        <script src="/front/js/owl.carousel.min.js"></script>			<!-- ===This Script for Owl Carousel=== -->
        <script src="/front/js/bootstrap.min.js"></script>			<!-- ===This Script for Bootstrap=== -->
        <script src="/front/js/jquery.meanmenu.min.js"></script>		<!-- ===This Script for Main Menu=== -->
		<script src="/front/js/jquery.jscroll.js"></script>
		<script src="/front/js/scripts.js"></script>	
        <script src="/front/js/jquery.jscroll.js"></script>
        <script type="text/javascript" src="{{ URL::asset('front/js/map.js') }}" ></script>
		<script>
			jQuery(document).ready(function($) {
				jQuery('.category-nav').meanmenu();
			});
		</script>
    </body>
</html>
