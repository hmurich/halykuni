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

				<div id="advicer">
					<center><span style="font-size:20px;">Ваш ЮрСоветник <i style="font-size:35px; cursor: pointer;" class="pe-7s-close-circle" id="1" onClick="open_advicer();"></i></span></center>
					<hr>

					<input type="text" class="form-control no-radius" placeholder="Впишите сюда ключевые слова Вашего вопроса">
								
									<button class="form-control btn btn-success" onClick="show_inses();">Найти</button>

					<hr>

					<div id="inses" style="display: none;">
						По Вашему запросу нашлись следующие инструкции: <hr>
						<a href="#">Пройти медицинское обследование</a>
						<a href="#">Получить справку об эпид. окружении</a>
						<a href="#">Получить бесплатную мед. помощь</a>
						<br><br>
						Также Вы можете посмотреть <a href="#">ближайшие поликлинники</a>
					</div>

				</div>

				<!-- ___Start Left Menu___ -->
				<div class="col-md-2 no-padding wow slideInLeft">
					<div id="left-sidebar">
						<div class="sidebar-menu">
							<div class="logo wow bounceIn" data-wow-delay="1.5s">
								<a href="../"><img src="/front/images/elim-ai.png" alt="HalykUni" /></a>
							</div>
							<!-- End Logo -->


							<!-- ___Start Latest Post___ -->

							<span class="accordion-toggle"><b>Школа № 22</b><span class="toggle-icon"><i class="fa fa-info"></i></span></span>
									<div class="accordion-content">
										<div style="padding:10px;color:white;font-size:12px;font-weight: lighter;">
										Коммунальное бюджетное образовательное учреждение "Средняя общеобразовательная школа № 22 г. Астана" - это не просто школа, это дом, в котором одновременно живет, учится и работает более 1100 человек. 
										<br><br>
										<b>Рейтинг: </b>
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
									</div>
										<div class="menu-body">
											
										<span class="accordion-toggle">Директор</span>

										<img src="/front/images/director.jpg" style="margin:10px;">
											<p style="margin:10px;color:white;">Иванов Иван Иванович - 1967 г.р.</p>

										</div><!-- End Latest Post Body -->
									</div><!-- End According Content -->
								<!-- End Latest Post Head -->

							</div>
					</div><!-- End Menu Left -->
				</div><!-- End Column -->
				<!-- End Left Menu -->

				<!-- ___Start Column___ -->
				<div class="col-md-10 no-padding wow  slideInRight">

					<!-- ___Start Top Bar___ -->
					<div class="top-bar">
						<div class="top-bar-head">
							<div class="search">
								<i class="pe-7s-info showSingle" id="1"></i>
								<p style="cursor: pointer;" onClick="open_advicer();">Получить консультацию</p>
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
							
									<input type="text" class="form-control no-radius" placeholder="Впишите сюда ключевые слова Вашего вопроса">

									<button class="form-control btn btn-success" onClick="open_advicer();">Найти</button>

							
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
					<div class="category-nav wow slideInRight " data-wow-delay="0.5s">
						<div id="mega-menu" class="mega-menu">
							<ul>
								<!-- ___Start Category Nav Life Style___ -->
								<li id="life-style" class="mega-menu-li life-style"><a href="#0">Фото</a>

								</li>
								<!-- End Category Nav Life Style -->

								<!-- ___Start Category Nav Travel___ -->
								<li id="travel" class="mega-menu-li travel"><a href="#0">Контакты</a>

								</li>
								<!-- End Category Nav Travel -->

								<!-- ___Start Category Nav Coding___ -->
								<li id="coding" class="mega-menu-li coding"><a href="otzyvy">Отзывы</a>

								</li>
								<!-- End Category Nav Travel -->

								<!-- ___Start Category Nav Music___ -->
								<li id="music" class="mega-menu-li music"><a href="budzhet">Бюджет</a>

								</li>
								<!-- End Category Nav Music -->

						</div>
					</div>
					<!-- End Category Nav -->


					<!-- ___Start About Octagon___ -->
					<div class="main-content">
						<div class="row" style="margin-top:-90px;">
							<div class="col-md-12 w-100">
								
							

							<!-- ___Start Column___ -->
							<div class="text-center">
										
											<div class="sidebar-widget sidebar-tab">
												<div role="tabpanel">
													<!-- Nav Tabs -->
													<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab"><font color="green">Положительные</font></a></li>
														<li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab"><font color="red">Отрицательные</font></a></li>
														<li role="presentation"><a href="about">Назад к учреждению</a></li>
													</ul>

													<!-- ___Tab Content___ -->
													<div class="tab-content">
														<!-- ___Tab Pane Popular___ -->
														<div role="tabpanel" class="tab-pane fade in active" id="popular">
															<ul>
																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Лаура</h3>
																				<span>Январь 20, 2018</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Отличная школа! Сама в ней училась, никогда не видела проявлений коррупции!</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Анара</h3>
																				<span>Февраль 28, 2018</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Да, ребенок ходит уже в шестой класс, всегда отзывчивое руководство</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ильяс</h3>
																				<span>Январь 20, 2015</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>Всегда восхищалась учителями данной школы. Ребенок учится и делает задания так легко, что кажется скоро сможет перепрыгнуть пятый класс</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>
															</ul>

															<div class="col-md-12 w-100">
																<div class="contact bg-box-shadow">
																	<div class="contact-logo text-center">
																		<i class="pe-7s-mail"></i>
																		<p>Написать положительный отзыв</p>
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
																						<label for="email">Ваша почта</label>
																						<input type="text" class="form-control" id="email" name="email" >
																					</div>

																					<div class="form-group">
																						<label for="web">Ваш номер</label>
																						<input type="text" class="form-control" id="web" name="web" >
																					</div>

																					<div class="form-group">
																						<label for="web">Прикрепить видео, фото</label>
																						<input type="file" class="form-control" id="web" name="web" >
																					</div>
																				</div><!-- End Column 6 -->

																				<!-- ___Message & Send It___ -->
																				<div class="col-md-6">

																					<div class="form-group">
																						<label for="message">Сообщение</label>
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
																<br>
															</div>


														</div>
														<!-- End Tab Pane Popular -->

														<!-- ___Tab Pane Video___ -->
														<div role="tabpanel" class="tab-pane fade" id="video">
															<ul>
																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ильяс</h3>
																				<span>Январь 20, 2018</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				А у меня учитель попросил взятку</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Серик</h3>
																				<span>Февраль 28, 2018</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>
																				Вот вот, в прошлый раз снова поборы устроили, все на ремонт, а у самих вон сколько в бюджете выделяют на ремонт!!!</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>

																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>Ильяс</h3>
																				<span>Январь 20, 2015</span>
																			</div>
																			<div class="media-left__bottom">
																				<p>Да как обычно, просто деньги себе забрать хотят</p>
																				<a href="">Подробнее</a>
																			</div>

																		</div>
																	</div><!-- End Media -->
																</li>
															</ul>



															<div class="col-md-12 w-100">
																<div class="contact bg-box-shadow">
																	<div class="contact-logo text-center">
																		<i class="pe-7s-mail"></i>
																		<p>Написать отрицательный отзыв</p>
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
																						<label for="email">Ваша почта</label>
																						<input type="text" class="form-control" id="email" name="email" >
																					</div>

																					<div class="form-group">
																						<label for="web">Ваш номер</label>
																						<input type="text" class="form-control" id="web" name="web" >
																					</div>

																					<div class="form-group">
																						<label for="web">Прикрепить видео, фото</label>
																						<input type="file" class="form-control" id="web" name="web" >
																					</div>
																				</div><!-- End Column 6 -->

																				<!-- ___Message & Send It___ -->
																				<div class="col-md-6">

																					<div class="form-group">
																						<label for="message">Сообщение</label>
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

															</div>

															<br>

														</div>
														<!-- End Tab Pane Video -->

													
													</div><!-- End Tab Content -->
												</div><!-- End Tab Panel -->
											</div><!-- End Side Tab -->


								</div> <!-- End Column -->
							</div><!-- Content -->
						</div> <!-- End Row -->
					</div>

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
										<p>Подписаться на новости учреждения</p>
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
										<p>Будьте в курсе всех новостей</p>
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

		

        <script type="text/javascript" src="{{ URL::asset('front/js/jquery-2.2.3.min.js') }}" ></script>
        
        <script src="/front/js/owl.carousel.min.js"></script>			<!-- ===This Script for Owl Carousel=== -->
        <script src="/front/js/bootstrap.min.js"></script>			<!-- ===This Script for Bootstrap=== -->
        <script src="/front/js/jquery.meanmenu.min.js"></script>		<!-- ===This Script for Main Menu=== -->
		<script src="/front/js/jquery.jscroll.js"></script>
		<script src="/front/js/scripts.js"></script>	
		<script src="/front/js/highcharts.js"></script>
        <script src="/front/js/jquery.jscroll.js"></script>
        <script src="/front/js/hightcharts_custom.js"></script>
		<script>
			jQuery(document).ready(function($) {
				jQuery('.category-nav').meanmenu();
			});

			function open_advicer(){
  					$( "#advicer" ).toggle( "slide" );
			}

			function show_inses(){
				$( "#inses" ).toggle( "slide" );
			}
			
		</script>
    </body>
</html>
