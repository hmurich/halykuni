@extends('front.layout')

@section('title', $title)

@section('content')

<div class="main-content" style="padding: 0;     padding-top: 40px;">
    <div class="row" style="margin-top:-90px;">
        <div class="col-md-12 w-100">
            <!-- ___Start Column___ -->
            <div class="text-center">
                <div class=" w-100">
                    <div class="sidebar-widget sidebar-tab">
                        <div role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active" style="width: 50%;"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab" >Карта</a></li>
                                <li role="presentation" style="width: 50%;"><a href="#video" aria-controls="video" role="tab" data-toggle="tab" >Список</a></li>
                            </ul>

                            <div class="tab-content" style="padding: 0;">
                                <div role="tabpanel" class="tab-pane fade in active" id="popular">
                                    <div id="yandex_map" style="width: 100%; height: 400px;"></div>
                                    <div ></div>
                                    <div id='budjet_desc' class="map-description">
                                        <h5>Контрольные суммы</h5>
                                        <b>Общая сумма:</b> <span class="pull-right">1 500 000 000 тг.</span> <br/>
                                        <b>Средняя сумма:</b> <span class="pull-right">250 000 000 тг. </span><br/>
                                        <b>Средняя по ремонту дорог:</b> <span class="pull-right">450 000 000 тг.</span> <br/>
                                        <b>Средняя по ремонту школ:</b><span class="pull-right"> 250 000 000 тг.</span> <br/>
                                        <b>Средняя по постройке больниц:</b>&nbsp;&nbsp;&nbsp;<span class="pull-right">700 000 000 тг.</span>
                                    </div>
                                    <div id='org_desc' class="map-description" style="">
                                        <h5>Определение цветами рейтинга</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="circle circle-4"></div> Очень низкий   <br/>
                                                <div class="circle circle-3"></div> Низкий уровень
                                            </div>
                                            <div class="col-md-6">
                                                <div class="circle circle-2"></div> Средний уровень <br/>
                                                <div class="circle circle-1"></div> Высокий уровень
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="video">
                                    <ul>
                                        <li style="padding-left: 15px;">
                                            <div class="media">
                                                <div class="media-body media-left">
                                                    <div class="media-left__top">
                                                        <h3>Школа № 22, город Астана</h3>
                                                        <span>Образовательное учреждение</span>
                                                    </div>
                                                    <div class="media-left__bottom">
                                                        <p>
                                                            КОММУНАЛЬНОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ "СРЕДНЯЯ ОБЩЕОБРАЗОВАТЕЛЬНАЯ ШКОЛА № 22 Г. АСТАНА"
                                                        </p>
                                                        <a href="about">Подробнее</a>
                                                    </div>

                                                </div>
                                            </div><!-- End Media -->
                                        </li>

                                        <li style="padding-left: 15px;">
                                            <div class="media">
                                                <div class="media-body media-left">
                                                    <div class="media-left__top">
                                                        <h3>Школа № 25, город Астана</h3>
                                                        <span>Образовательное учреждение</span>
                                                    </div>
                                                    <div class="media-left__bottom">
                                                        <p>
                                                            КОММУНАЛЬНОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ "СРЕДНЯЯ ОБЩЕОБРАЗОВАТЕЛЬНАЯ ШКОЛА № 22 Г. АСТАНА"
                                                        </p>
                                                        <a href="about">Подробнее</a>
                                                    </div>

                                                </div>
                                            </div><!-- End Media -->
                                        </li>

                                        <li style="padding-left: 15px;">
                                            <div class="media">
                                                <div class="media-body media-left">
                                                    <div class="media-left__top">
                                                        <h3>Школа № 25, город Астана</h3>
                                                        <span>Образовательное учреждение</span>
                                                    </div>
                                                    <div class="media-left__bottom">
                                                        <p>
                                                            КОММУНАЛЬНОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ "СРЕДНЯЯ ОБЩЕОБРАЗОВАТЕЛЬНАЯ ШКОЛА № 22 Г. АСТАНА"
                                                        </p>
                                                        <a href="about">Подробнее</a>
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
        </div>
    </div>
</div>


@endsection
