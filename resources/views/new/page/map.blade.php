@extends('new.layout')

@section('title', $title)

@section('content')
<!-- Map -->
<div class="map-container column-map right-pos-map">
   <div id="map-main"></div>
   <div id='org_desc' class="map-description" style="    width: 100%;">
       <h3>Определение цветами рейтинга</h3>
       <div class="row">
           <div class="col-md-6">
               <div class="fa fa-circle " style="color:black"></div> Очень низкий   <br/>
               <div class="fa fa-circle " style="color:#01b393"></div> Низкий уровень
           </div>
           <div class="col-md-6">
               <div class="fa fa-circle " style="color:orange"></div> Средний уровень <br/>
               <div class="fa fa-circle " style="color:red"></div> Высокий уровень
           </div>
       </div>
   </div>
</div>
<!-- Map end -->
<!--col-list-wrap -->
<div class="col-list-wrap left-list">
   <div class="listsearch-options fl-wrap" id="lisfw" >
       <div class="container">
           <div class="listsearch-header fl-wrap">
               <h3>Поиск : <span> введите название гос. органа ниже</span></h3>
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
                   <i class="mbri-key single-i"></i>
                   <input type="text" placeholder="Название гос. органа" value=""/>
               </div>
               <div class="listsearch-input-item">
                   <select data-placeholder="Категория" class="chosen-select">
                       <option>Все категории</option>
                       <option>Медицина</option>
                       <option>Образование</option>
                       <option>Акиматы</option>
                   </select>
               </div>
               <div class="listsearch-input-item">
                   <select data-placeholder="Область" class="chosen-select" >
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
                   <input type="text" placeholder="Проспект Республики 35" id="autocomplete-input" class="qodef-archive-places-search" value=""/>
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
                       <label for="check-aa">Поликлинника</label>
                       <input id="check-b" type="checkbox" name="check">
                       <label for="check-b">Лучшее обслуживание</label>
                       <input id="check-c" type="checkbox" name="check">
                       <label for="check-c">Мало очередей</label>
                       <input id="check-d" type="checkbox" name="check">
                       <label for="check-d">Есть Wi-Fi</label>
                   </div>
               </div>
               <!-- hidden-listing-filter end -->
               <button class="button fs-map-btn">Показать</button>
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
                       <img src="/new/images/shkola.jpg" alt="">
                       <div class="overlay"></div>
                       <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/about">Школы</a>
                       <h3><a href="/about">Школа № 22</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                               <span>(7 отзывов)</span>
                           </div>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ул. Торайгырова, 22</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/images/tson.jpg" alt="">
                       <div class="overlay"></div>
                       <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/about">ЦОНы</a>
                       <h3><a href="/about">ЦОН, РГП, Республики проспект, 43, Астана</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                               <span>(7 отзывов)</span>
                           </div>
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
                       <img src="/new/images/shkola.jpg" alt="">
                       <div class="overlay"></div>
                       <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/about">Школы</a>
                       <h3><a href="/about">Школа № 22</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                               <span>(7 отзывов)</span>
                           </div>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ул. Торайгырова, 22</a></div>
                       </div>
                   </div>
               </article>
           </div>
           <!-- listing-item end-->
           <!-- listing-item -->
           <div class="listing-item">
               <article class="geodir-category-listing fl-wrap">
                   <div class="geodir-category-img">
                       <img src="/new/images/tson.jpg" alt="">
                       <div class="overlay"></div>
                       <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                   </div>
                   <div class="geodir-category-content fl-wrap">
                       <a class="listing-geodir-category" href="/about">ЦОНы</a>
                       <h3><a href="/about">ЦОН, РГП, Республики проспект, 43, Астана</a></h3>
                       <p></p>
                       <div class="geodir-category-options fl-wrap">
                           <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                               <span>(7 отзывов)</span>
                           </div>
                           <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Республики проспект, 43, Астана</a></div>
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
    <script type="text/javascript" src="{{ URL::asset('front/js/map.js') }}" ></script>

@endsection
