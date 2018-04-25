<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" > <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> @yield('title') </title>
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
        @section('css_block')

        @show
    </head>
    <body>


		<!-- ___Start Home One Page___ -->
		<div class="container-fluid home-1" id="container-full">
			<div class="row">
                @include('front.__include.advicer')
                @include('front.__include_about.left_menu')


				<!-- ___Start Column___ -->
				<div class="col-md-10 no-padding wow  slideInRight">
                    @include('front.__include.top_bar')

                    @include('front.__include_about.top_nav')


                    @yield('content')



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
        @section('js_block')
        @show
    </body>
</html>
