@extends('new.layout')

@section('title', $title)

@section('content')
<!-- Map -->
<div class="map-container column-map right-pos-map">
    <div id="map-main"></div>
    <div id='budjet_desc' class="map-description"  style="    width: 100%;">
        <h5>Контрольные суммы</h5>
        <b>Общая сумма:</b> <span class="pull-right">1 500 000 000 тг.</span> <br/>
        <b>Средняя сумма:</b> <span class="pull-right">250 000 000 тг. </span><br/>
        <b>Средняя по ремонту дорог:</b> <span class="pull-right">450 000 000 тг.</span> <br/>
        <b>Средняя по ремонту школ:</b><span class="pull-right"> 250 000 000 тг.</span> <br/>
        <b>Средняя по постройке больниц:</b>&nbsp;&nbsp;&nbsp;<span class="pull-right">700 000 000 тг.</span>
    </div>
</div>
<!-- Map end -->
<!--col-list-wrap -->
<div class="col-list-wrap left-list">
   <div class="listsearch-options fl-wrap" id="lisfw" >
       <div class="container">
           <div class="listsearch-header fl-wrap">
               <h3>Поиск : <span> </span></h3>
               <div class="listing-view-layout">
                   <ul>
                       <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                       <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                   </ul>
               </div>
           </div>
           <!-- listsearch-input-wrap  -->
           <div class="listsearch-input-wrap fl-wrap">
               <div class="listsearch-input-item">
                   <select data-placeholder="Категория" class="chosen-select js_change_map">
                       <option>Все обьекты</option>
                       <option>Ремонт школ № 31</option>
                       <option>Ремонт дороги, Кенесары</option>
                       <option>Ремонт больниц № 1</option>
                       <option>Строительство школы № 84</option>
                   </select>
               </div>
               <div class="listsearch-input-item">
                   <select data-placeholder="Категория" class="chosen-select js_change_map">
                       <option>Все категории</option>
                       <option>Ремонт школ</option>
                       <option>Ремонт дорог</option>
                       <option>Ремонт больниц</option>
                       <option>Строительство школ</option>
                       <option>Строительство дорог</option>
                       <option>Строительство больниц</option>
                   </select>
               </div>
               <div class="listsearch-input-item">
                   <select data-placeholder="Область" class="chosen-select js_change_map" >
                       <option>Все области</option>
                       <option>Акмолинская</option>
                       <option>Алматинская</option>
                       <option>Карагандинская</option>
                       <option>Жамбыльская</option>
                       <option>Южно-Казахстанская</option>
                   </select>
               </div>
               <div class="listsearch-input-text" id="autocomplete-container">
                   <label><i class="mbri-map-pin"></i> Либо введите адрес: </label>
                   <input type="text" placeholder="Проспект Республики 35" id="autocomplete-input" class="qodef-archive-places-search js_change_map" value=""/>
                   <a  href="#"  class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></a>
               </div>
               <!-- hidden-listing-filter -->
               <div class="hidden-listing-filter fl-wrap">
                   <div class="distance-input fl-wrap">
                       <div class="distance-title"> В радиусе от меня <span></span> км</div>
                       <div class="distance-radius-wrap fl-wrap">
                           <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                       </div>
                   </div>
                   <!-- Checkboxes -->
                   <div class=" fl-wrap filter-tags">
                       <h4>Искать по тегам</h4>
                       <input id="check-aa" type="checkbox" name="check">
                       <label for="check-aa">Больница</label>
                       <input id="check-b" type="checkbox" name="check">
                       <label for="check-b">Школа</label>
                       <input id="check-c" type="checkbox" name="check">
                       <label for="check-c">Дорога</label>
                   </div>
               </div>
               <!-- hidden-listing-filter end -->
               <button class="button fs-map-btn js_show_map_summ">Показать</button>
               <div class="more-filter-option">Еще фильтры<span></span></div>
           </div>
           <!-- listsearch-input-wrap end -->
       </div>
   </div>
   <!-- list-main-wrap-->
   <div class="list-main-wrap fl-wrap card-listing">
       <a class="custom-scroll-link back-to-filters btf-l" href="#lisfw"><i class="fa fa-angle-double-up"></i><span>Назад к фильтрам</span></a>
       <div class="container">
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/store/1.jpg" alt="">
                       <div class="overlay"></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/sum-detail">Строительство школ</a>
                       <h3><a href="/sum-detail">Строительство школы № 84</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <span><i class="fa fa-dollar"></i> 118 910 800 тг.</span>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ул. Сейфулина 78, Астана</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/store/2.jpg" alt="">
                       <div class="overlay"></div>

                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/sum-detail">Ремонт школы</a>
                       <h3><a href="/sum-detail">Ремонт школы № 31, Кенесары 33,  Астана</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <span><i class="fa fa-dollar"></i> 4 245 311 тг.</span>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Республики проспект, 43, Астана</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/store/3.jpg" alt="">
                       <div class="overlay"></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/sum-detail">Ремонт дорог</a>
                       <h3><a href="/sum-detail">Участок кенесары с пер. Победы до пер. Республики</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <span><i class="fa fa-dollar"></i> 65 005 458 тг.</span>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ул. Кенесары, с пер. Победы до пер. Республики</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/store/4.jpg" alt="">
                       <div class="overlay"></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/sum-detail">Ремонт больниц</a>
                       <h3><a href="/sum-detail">Ремонт городской больницы № 1</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <span><i class="fa fa-dollar"></i> 15 120 111 тг.</span>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ул.Рақымжан Қошқарбаев 66,</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->

       </div>
       <a class="load-more-button" href="#">Загрузить еще <i class="fa fa-circle-o-notch"></i> </a>
   </div>
   <!-- list-main-wrap end-->
</div>
<!--col-list-wrap -->
<div class="limit-box fl-wrap"></div>
<!--section -->
@endsection

@section('js_block')
    @parent
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=package.full" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('front/js/sum.js') }}" ></script>

@endsection
