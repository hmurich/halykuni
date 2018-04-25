@extends('front.layout_about')

@section('title', $title)

@section('content')
<div class="main-content" >
    <div class="row"  style="margin-top:-90px;">
        <div class="sidebar-widget sidebar-tab">
            <div role="tabpanel">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="popular">
                        <center><h4 class="title">История</h4></center>
                        <ul>
                            <li>
                                <div class="media">
                                    <div class="media-body media-left">
                                        <div class="media-left__top">
                                            <span>Январь 20, 2018</span>
                                        </div>
                                        <div class="media-left__bottom">
                                            <p>Проведена проверка организации на пожарную безопасность</p>
                                            <a href="">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media" >
                                    <div class="media-body media-left">
                                        <div class="media-left__top">
                                            <span>Январь 20, 2018</span>
                                        </div>
                                        <div class="media-left__bottom">
                                            <p>Задержан главный бухгалтер за получение взятки в среднем размере</p>
                                            <a href="">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body media-left">
                                        <div class="media-left__top">

                                            <span>Январь 20, 2015</span>
                                        </div>
                                        <div class="media-left__bottom">
                                            <p>Назначен новый руководитель организации</p>
                                            <a href="">Подробнее</a>
                                        </div>

                                    </div>
                                </div><!-- End Media -->
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
