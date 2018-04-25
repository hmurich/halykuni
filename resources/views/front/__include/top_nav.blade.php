<!-- ___Start Category Nav___ -->
<div class="category-nav">
    <div id="mega-menu" class="mega-menu">
        <ul>
            <!-- ___Start Category Nav Life Style___ -->
            <li id="life-style" class="mega-menu-li life-style" >
                <a href="{{ action('IndexController@getIndex') }}"><i class="pe-7s-speaker" style="font-size:25px;"></i> Главная</a>
            </li>

            <!-- ___Start Category Nav Life Style___ -->
            <li id="life-style" class="mega-menu-li life-style" >
                <a href="{{ action('IndexController@getAppeal') }}"><i class="pe-7s-speaker" style="font-size:25px;"></i> Жалоба</a>
            </li>
            <!-- End Category Nav Life Style -->


            <!-- ___Start Category Nav Music___ -->
            <li id="music" class="mega-menu-li music" >
                <a href="#0"><i class="pe-7s-news-paper" style="font-size:25px;"></i>Новости</a>

            </li>
            <!-- End Category Nav Music -->

            <!-- ___Start Category Nav Sports___ -->
            <li id="sports" class="mega-menu-li sports" >
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
                                                    <!--div class="list" ><a href="{{ action('IndexController@getAppeal') }}" >Проверить жалобу</a></div> -->

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
                                                        <div class="col-md-4 col-sm-3  no-padding">
                                                            <div class="menu-post">
                                                                <div class="post">
                                                                    <img class="img-responsive" src="images/mm/mm-post-5.jpg" alt="" />
                                                                    <h3><a href="#0" class="js_show_map_summ">Суммы выделенные на строительство дорог</a></h3>
                                                                    <h3><a href="#0" class="js_show_map_summ">Суммы выделенные на ремонт школ</a></h3>
                                                                </div>
                                                            </div><!-- End Menu Post -->
                                                        </div>
                                                        <div class="col-md-4 col-sm-3  no-padding">
                                                            <div class="menu-post">
                                                                <div class="post">
                                                                    <img class="img-responsive" src="images/mm/mm-post-6.jpg" alt="" />
                                                                    <h3><a href="#0" class="js_show_map_summ">Суммы выделенные на ремонт поликлинник</a></h3>
                                                                    <h3><a href="#0" class="js_show_map_summ">Суммы выделенные на чистоту города</a></h3>
                                                                </div>
                                                            </div><!-- End Menu Post -->
                                                        </div>
                                                        <div class="col-md-4 col-sm-3  no-padding">
                                                            <div class="menu-post">
                                                                <div class="post">
                                                                    <img class="img-responsive" src="images/mm/mm-post-7.jpg" alt="" />
                                                                    <h3><a href="#0"  class="js_show_map_summ">Просто выберите нужную категорию!</a></h3>
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
