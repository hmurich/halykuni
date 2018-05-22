@extends('new.layout')

@section('title', $title)

@section('content')
<!--  section  -->
<section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
   <div class="bg par-elem "  data-bg="/new/images/shkola22.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
   <div class="overlay"></div>
   <div class="bubble-bg"></div>
   <div class="list-single-header absolute-header fl-wrap">
       <div class="container">
           <div class="list-single-header-item">
               <div class="list-single-header-item-opt fl-wrap">
                   <div class="list-single-header-cat fl-wrap">
                       <a href="#">Школа № 22</a>
                       <span>  Сейчас открыта <i class="fa fa-check"></i></span>
                   </div>
               </div>
               <h2>Школа № 22 <span> - Директор </span><a href="author-single.html"> Сагинов Бауыржан Ертаевич</a> </h2>
               <span class="section-separator"></span>
               <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                   <span>(34 отзывов)</span>
               </div>
               <div class="list-post-counter single-list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
               <div class="clearfix"></div>
               <div class="row">
                   <div class="col-md-6">
                       <div class="list-single-header-contacts fl-wrap">
                           <ul>
                               <li><i class="fa fa-phone"></i><a  href="#">+7(775)123456789</a></li>
                               <li><i class="fa fa-map-marker"></i><a  href="#">Проспект Республики, 45</a></li>
                               <li><i class="fa fa-envelope-o"></i><a  href="#">shkola22@mail.ru</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="fl-wrap list-single-header-column">
                           <div class="share-holder hid-share">
                               <div class="showshare"><span>Поделиться </span><i class="fa fa-share"></i></div>
                               <div class="share-container  isShare"></div>
                           </div>
                           <span class="viewed-counter"><i class="fa fa-eye"></i> Просмотры -  156 </span>
                           <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Оставить отзыв </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!--  section end -->
<div class="scroll-nav-wrapper fl-wrap">
   <div class="container">
       <nav class="scroll-nav scroll-init">
           <ul>
               <li><a class="act-scrlink" href="#sec1">Главная</a></li>
               <li><a href="#sec2">Об организации</a></li>
               <li><a href="#sec3">Бюджет</a></li>
               <li><a href="#sec4">Отзывы</a></li>
               <li><a href="#sec6">Пройти опрос</a></li>
                <li><a href="#sec7"><font color="red">Подать жалобу</font></a></li>
           </ul>
       </nav>
       <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Сохранить </a>
   </div>
</div>
<!--  section  -->
<section class="gray-section no-top-padding">
   <div class="container">
       <div class="row">
           <div class="col-md-8">
               <div class="list-single-main-wrapper fl-wrap" id="sec2">
                   <div class="list-single-main-media fl-wrap">
                        <div id="diagram"></div>
                   </div>
                   <div class="list-single-main-item fl-wrap">
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>О школе</h3>
                       </div>
                       <p>Коммунальное бюджетное образовательное учреждение "Средняя общеобразовательная школа № 22 г. Астана" - это не просто школа, это дом, в котором одновременно живет, учится и работает более 1100 человек.</p>
                       <span class="fw-separator"></span>
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>Что у нас есть</h3>
                       </div>
                       <div class="listing-features fl-wrap">
                           <ul>
                               <li><i class="fa fa-wifi"></i> Свободный Wi Fi</li>
                               <li><i class="fa fa-motorcycle"></i> Бесплатная парковка</li>
                               <li><i class="fa fa-cloud"></i> Кондиционируемые помещения</li>
                               <li><i class="fa fa-shopping-cart"></i> Онлайн дневник</li>
                               <li><i class="fa fa-tree"></i> Места отдыха снаружи</li>
                               <li><i class="fa fa-wheelchair"></i> Условия для детей-инвалидов</li>
                           </ul>
                       </div>

                   </div>
                   <div class="list-single-facts fl-wrap gradient-bg">
                       <!-- inline-facts -->
                       <div class="inline-facts-wrap">
                           <div class="inline-facts">
                               <i class="fa fa-male"></i>
                               <div class="milestone-counter">
                                   <div class="stats animaper">
                                       <div class="num" data-content="0" data-num="556">0</div>
                                   </div>
                               </div>
                               <h6>учеников</h6>
                           </div>
                       </div>
                       <!-- inline-facts end -->
                       <!-- inline-facts  -->
                       <div class="inline-facts-wrap">
                           <div class="inline-facts">
                               <i class="fa fa-hand-peace-o"></i>
                               <div class="milestone-counter">
                                   <div class="stats animaper">
                                       <div class="num" data-content="0" data-num="6789">0</div>
                                   </div>
                               </div>
                               <h6>выпускников с момента основания</h6>
                           </div>
                       </div>
                       <!-- inline-facts end -->
                       <!-- inline-facts  -->
                       <div class="inline-facts-wrap">
                           <div class="inline-facts">
                               <i class="fa fa-trophy"></i>
                               <div class="milestone-counter">
                                   <div class="stats animaper">
                                       <div class="num" data-content="0" data-num="72">0</div>
                                   </div>
                               </div>
                               <h6>Наград</h6>
                           </div>
                       </div>
                       <!-- inline-facts end -->
                   </div>
                   <div class="list-single-main-item fl-wrap" id="sec3">
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>Бюджет</h3>
                           <div id="budzhet"></div>
                       </div>

                   </div>
                   <!-- list-single-main-item end -->
                   <!-- list-single-main-item -->
                   <div class="list-single-main-item fl-wrap" id="sec4">
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>Отзывы -  <span> 3 </span></h3>
                       </div>
                       <div class="reviews-comments-wrap">
                           <!-- reviews-comments-item -->
                           <div class="reviews-comments-item">
                               <div class="review-comments-avatar">
                                   <img src="http://citybook.kwst.net//new/images/avatar/1.jpg" alt="">
                               </div>
                               <div class="reviews-comments-item-text">
                                   <h4><a href="#">Жанара</a></h4>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="clearfix"></div>
                                   <p>Отличная школа! Сама в ней училась, никогда не видела проявлений коррупции!</p>
                                   <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                               </div>
                           </div>
                           <!--reviews-comments-item end-->
                           <!-- reviews-comments-item -->
                           <div class="reviews-comments-item">
                               <div class="review-comments-avatar">
                                   <img src="http://citybook.kwst.net//new/images/avatar/2.jpg" alt="">
                               </div>
                               <div class="reviews-comments-item-text">
                                   <h4><a href="#">Ринат</a></h4>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                   <div class="clearfix"></div>
                                   <p>Да, ребенок ходит уже в шестой класс, всегда отзывчивое руководство</p>
                                   <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                               </div>
                           </div>
                           <!--reviews-comments-item end-->
                           <!-- reviews-comments-item -->
                           <div class="reviews-comments-item">
                               <div class="review-comments-avatar">
                                   <img src="http://citybook.kwst.net//new/images/avatar/3.jpg" alt="">
                               </div>
                               <div class="reviews-comments-item-text">
                                   <h4><a href="#">Аноним</a></h4>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="clearfix"></div>
                                   <p>Всегда восхищался учителями данной школы. Ребенок учится и делает задания так легко, что кажется скоро сможет перепрыгнуть пятый класс</p>
                                   <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                               </div>
                           </div>
                           <!--reviews-comments-item end-->
                       </div>
                   </div>
                   <!-- list-single-main-item end -->
                   <!-- list-single-main-item -->
                   <div class="list-single-main-item fl-wrap" id="sec5">
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>Оставить отзыв  и проголосовать</h3>
                       </div>
                       <!-- Add Review Box -->
                       <div id="add-review" class="add-review-box">
                           <div class="leave-rating-wrap">
                               <span class="leave-rating-title">Ваша оценка : </span>
                               <div class="leave-rating">
                                   <input type="radio" name="rating" id="rating-1" value="1"/>
                                   <label for="rating-1" class="fa fa-star-o"></label>
                                   <input type="radio" name="rating" id="rating-2" value="2"/>
                                   <label for="rating-2" class="fa fa-star-o"></label>
                                   <input type="radio" name="rating" id="rating-3" value="3"/>
                                   <label for="rating-3" class="fa fa-star-o"></label>
                                   <input type="radio" name="rating" id="rating-4" value="4"/>
                                   <label for="rating-4" class="fa fa-star-o"></label>
                                   <input type="radio" name="rating" id="rating-5" value="5"/>
                                   <label for="rating-5" class="fa fa-star-o"></label>
                               </div>
                           </div>
                           <!-- Review Comment -->
                           <form   class="add-comment custom-form">
                               <fieldset>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <label><i class="fa fa-user-o"></i></label>
                                           <input type="text" placeholder="Ваше имя *" value=""/>
                                       </div>
                                       <div class="col-md-6">
                                           <label><i class="fa fa-envelope-o"></i>  </label>
                                           <input type="text" placeholder="Ваша эл. почта *" value=""/>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <input type="file">
                                           Прикрепить фото, видео
                                       </div>
                                   </div>
                                   <textarea cols="40" rows="3" placeholder="Ваш отзыв:"></textarea>
                               </fieldset>
                               <button class="btn  big-btn  color-bg flat-btn">Оставить отзыв <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                           </form>
                       </div>
                       <!-- Add Review Box / End -->
                   </div>
                   <!-- list-single-main-item end -->

                   <div class="list-single-main-item fl-wrap" id="sec6" style="font-size:17px !important;">
                       <div class="list-single-main-item-title fl-wrap">
                           <h3>Пройти опрос</h3>
                       </div>
                               <span>Ваши ответы очень важны для достоверного построения рейтинга организации</span>
                               <br><br>
                               <form  class="add-comment custom-form">

                           <div class="media-left__bottom">
                               <h5><font color="green">С какими правонарушениями Вы сталкивались в данной организации?</font></h5>
                               <br><br>
                               <input type="checkbox"> Коррупционные правонарушения<br>
                                                   <input type="checkbox"> Неэтичное поведение служащих<br>
                                                   <input type="checkbox"> Истребование излишних документов<br>
                                                   <input type="checkbox"> Нет, не сталкивался<br>
                                                   <!--<br>
                                                   <hr>
                                                   <b>Ваш комментарий</b>
                                                   <textarea class="form-control"></textarea>-->
                                                   <button class="btn  big-btn  color-bg flat-btn">Отправить ответы</button>
                                               </div>
                                           </form>
                                       </div>


                                       <div class="list-single-main-item fl-wrap" id="sec7">
                                           <div class="list-single-main-item-title fl-wrap">
                                           <h3><font color="red">Написать жалобу</font></h3>
                                       </div>
                                           <div class="contact-form">
                                               <div class="row">
                                                   <form class="add-comment custom-form">

                                                       <!-- ___Input .Name .Email. Website___ -->
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="name">Ваше имя</label>
                                                               <input type="text" id="name" name="name" >
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
                                                               <label for="web">Выбрать ЭЦП</label>
                                                               <input type="file" class="form-control" id="web" name="web" >
                                                           </div>
                                                           <div class="form-group">
                                                               <button type="submit" class="btn  big-btn  color-bg flat-btn" >Отправить используя ЭЦП</button>
                                                           </div>
                                                       </div><!-- End Column 6 -->
                                                   </form><!-- End Form -->
                                               </div><!-- End Row -->
                                           </div><!-- End Contact Form -->

                                       </div>

                                   </div>
                               </div>
                               <!--box-widget-wrap -->
                               <div class="col-md-4">
                                   <div class="box-widget-wrap">
                                       <!--box-widget-item -->
                                       <div class="box-widget-item fl-wrap">
                                           <div class="box-widget-item-header">
                                               <h3>Часы работы: </h3>
                                           </div>
                                           <div class="box-widget opening-hours">
                                               <div class="box-widget-content">
                                                   <span class="current-status"><i class="fa fa-clock-o"></i> Сейчас открыто</span>
                                                   <ul>
                                                       <li><span class="opening-hours-day">Понедельник </span><span class="opening-hours-time">9 утра - 5 вечера</span></li>
                                                       <li><span class="opening-hours-day">Вторник </span><span class="opening-hours-time">9 утра - 5 вечера</span></li>
                                                       <li><span class="opening-hours-day">Среда </span><span class="opening-hours-time">9 утра - 5 вечера</span></li>
                                                       <li><span class="opening-hours-day">Четверг </span><span class="opening-hours-time">9 утра - 5 вечера</span></li>
                                                       <li><span class="opening-hours-day">Пятница </span><span class="opening-hours-time">9 утра - 5 вечера</span></li>
                                                       <li><span class="opening-hours-day">Суббота </span><span class="opening-hours-time">9 утра - 3 вечера</span></li>
                                                       <li><span class="opening-hours-day">Воскресенье </span><span class="opening-hours-time">Закрыто</span></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                       <!--box-widget-item end -->
                                       <!--box-widget-item -->
                                       <div class="box-widget-item fl-wrap">
                                           <div class="box-widget-item-header">
                                               <h3>Расположение / Контакты : </h3>
                                           </div>
                                           <div class="box-widget">
                                               <div class="box-widget-content">
                                                   <div class="list-author-widget-contacts list-item-widget-contacts">
                                                       <ul>
                                                           <li><span><i class="fa fa-map-marker"></i> Адрес :</span> <a href="#">ПРОСПЕКТ РЕСПУБЛИКИ, 45</a></li>
                                                           <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                           <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                           <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                                       </ul>
                                                   </div>
                                                   <div class="list-widget-social">
                                                       <ul>
                                                           <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                           <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                           <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                                           <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!--box-widget-item end -->
                                       <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Директор : </h3>
                                            </div>
                                            <div class="box-widget list-author-widget">
                                                <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                                    <span class="list-author-widget-link"><a href="author-single.html">Иван Иванович</a></span>
                                                    <img src="/front/images/director.jpg" alt="">
                                                </div>
                                                <div class="box-widget-content">
                                                    <div class="list-author-widget-text">
                                                        <div class="list-author-widget-contacts">
                                                            <ul>
                                                                <li><span><i class="fa fa-phone"></i> Телефон :</span> <a href="#">+7(123)987654</a></li>
                                                                <li><span><i class="fa fa-envelope-o"></i> Почта :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                                <li><span><i class="fa fa-globe"></i> Сайт :</span> <a href="#">themeforest.net</a></li>
                                                            </ul>
                                                        </div>
                                                        <a href="#show" class="btn transparent-btn">Просмотреть историю <i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                   </div>
                               </div>
                               <!--box-widget-wrap end -->
                           </div>
                       </div>
                   </section>
                   <!--  section end -->
                   <div class="limit-box fl-wrap"></div>

@endsection

@section('js_block')
    @parent
    <script type="text/javascript" src="/new/js/highcharts.js"></script>
        <script>
            jQuery(document).ready(function($) {
                Highcharts.chart('diagram', {

                title: {
                    text: 'Рейтинг организации'
                },

                subtitle: {
                    text: 'Школа 22 (процентные показатели)'
                },

                yAxis: {
                    title: {
                        text: 'Показатели'
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2010
                    }
                },

                series: [{
                    name: 'Общий рейтинг',
                    data: [15, 10, 65, 20, 45, 30, 39, 43]
                },{
                    name: 'Удовлетворенность населения',
                    data: [60, 70, 45, 70, 90, 80, 90, 90]
                }, {
                    name: 'Мероприятия антикоррупционного характера',
                    data: [50, 55, 60, 55, 70, 80, 90, 57]
                }, {
                    name: 'Нарушения этических норм',
                    data: [20, 30, 20, 40, 20, 10, 5, 10]
                }, {
                    name: 'Нарушения Закона о гос. услугах',
                    data: [10, 20, 30, 10, 50, 20, 10, 30]
                }
                ],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            });

            });

        Highcharts.chart('budzhet', {

            title: {
                text: 'Суммы, выделяемые организации'
            },

            subtitle: {
                text: 'Школа 22 (процентные показатели)'
            },

            yAxis: {
                title: {
                    text: 'Суммы'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2010
                }
            },

            series: [{
                    name: 'Канц. товары',
                    data: [600000, 234234, 34535, 13232, 567577, 567456, 567456, 34344]
                }, {
                    name: 'Сфера питания',
                    data: [345345, 345456, 345356, 342342, 456456, 234234, 345345, 345634]
                }, {
                    name: 'Ремонт',
                    data: [20, 30, 20, 40, 20, 10, 5, 10]
                }
            ],

            responsive: {
            rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
            }]
            }

            });
            </script>

@endsection
