@extends('new.layout')

@section('title', $title)

@section('content')
<!--  section  -->
<section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
   <div class="bg par-elem "  data-bg="/new/store/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
   <div class="overlay"></div>
   <div class="bubble-bg"></div>
   <div class="list-single-header absolute-header fl-wrap">
       <div class="container">
           <div class="list-single-header-item">
               <div class="list-single-header-item-opt fl-wrap">
                   <div class="list-single-header-cat fl-wrap">
                       <a href="#">Сторительство школ</a>
                   </div>
               </div>
               <h2>Строительство школы № 84 <span><i class="fa fa-dollar"></i> 118 910 800 тг.</span></h2>
               <span class="section-separator"></span>
               <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                   <span>(34 отзывов)</span>
               </div>
               <div class="clearfix"></div>
               <div class="row">
                   <div class="col-md-6">
                       <div class="list-single-header-contacts fl-wrap">
                           <ul>
                               <li><i class="fa fa-phone"></i><a  href="#">+7(775)123456789</a></li>
                               <li><i class="fa fa-map-marker"></i><a  href="#">Проспект Республики, 45</a></li>
                               <li><i class="fa fa-envelope-o"></i><a  href="#">shkola84@mail.ru</a></li>
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
               <li><a href="#sec2">Описание</a></li>
               <li><a href="#sec4">Отзывы</a></li>
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
                           <h3>Описание</h3>
                       </div>
                       <p>В связи с перенаселенностью количества учеников Акиматом Астаны было принято решение о сторительстве школы №84. Школа расчитана на <b>3500 ученов.</b>
                           Ученикам будут доступны новые кабинеты информатики, спортзала, столовой.<br/>
                           Основным исполнителем была выбрана компания <b>"ДолгоСтрой Астаны".</b><br/>
                           Сумма выделяемая на сторительство - <b>118 910 800 тг.</b>
                       </p>

                   </div>
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
                                   <h4><a href="#">Аноним</a></h4>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="clearfix"></div>
                                   <p>Не уверен что школу закончат вовремя. СТорители уже почти два месяца ничего не делали на обьекте!</p>
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
                                   <h4><a href="#">Аноним</a></h4>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                   <div class="clearfix"></div>
                                   <p>Быстрее бы закончили, детям было бы удобно</p>
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
                                   <p>Прошу разобраться с проблемоц. Сторители не обезапасили зоку стройки, постарадал пожилой человек. Упал кирпич.</p>
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
                           <h3>Оставить отзыв </h3>
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
                                                <h3>Исполнитель : </h3>
                                            </div>
                                            <div class="box-widget list-author-widget">
                                                <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                                    <span class="list-author-widget-link"><a href="author-single.html">ТОО "ДолгоСтрой Астаны"</a></span>
                                                    <img src="/front/images/director.jpg" alt="">
                                                </div>
                                                <div class="box-widget-content">
                                                    <div class="list-author-widget-text">
                                                        <div class="list-author-widget-contacts">
                                                            <ul>
                                                                <li><span><i class="fa fa-phone"></i> Телефон :</span> <a href="#">+7(123)987654</a></li>
                                                                <li><span><i class="fa fa-envelope-o"></i> Почта :</span> <a href="#">AlisaNoory@domain.com</a></li>

                                                            </ul>
                                                        </div>
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
