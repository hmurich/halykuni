@extends('front.layout_about')

@section('title', $title)

@section('content')

<!-- ___Start About Octagon___ -->
<div class="main-content">
    <div class="row" style="margin-top:-90px;">
        <div class="col-md-12 w-100">
            <div class="text-center">
                <div class=" w-100">
                    <div class="sidebar-widget sidebar-tab">
                        <div role="tabpanel">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Рейтинг</a></li>
                                <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">ПРОГОЛОСОВАТЬ/Пройти опрос</a></li>
                                <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Подать жалобу</a></li>
                            </ul>

                            <!-- ___Tab Content___ -->
                            <div class="tab-content">
                                <!-- ___Tab Pane Popular___ -->
                                <div role="tabpanel" class="tab-pane fade in active" id="popular">
                                    <div id="diagram"></div>
                                    <!--
                                    <br>
                                    <div class="media">
                                        <style>
                                            .cent{
                                                    text-align: center;
                                            }
                                        </style>
                                        <div class="media-body media-left">
                                            <div class="media-left__top">
                                                <center><h3>Таблица показателей</h3></center>
                                                <center><span>Основная информация в цифрах</span></center>
                                            </div>
                                            <div class="media-left__bottom">

                                                <table class="table">
                                                    <thead>
                                                        <td><center><h5>Критерий</h5></center></td>
                                                        <td><center><h5>Показатель</h5></center></td>
                                                    </thead>
                                                    <tr>
                                                        <td class="cent"><font color="green"><h6>Количество оказанных услуг</h6></font></td>
                                                        <td class="cent"><h6>123 000</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cent"><font color="red"><h6>Количество жалоб</h6></font></td>
                                                        <td class="cent"><h6>4 234</h6></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="cent"><font color="red"><h6>В т.ч. на соблюдение этики</h6></font></td>
                                                        <td class="cent"><h6>1 200</h6></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="cent"><font color="red"><h6>В т.ч. на проявления коррупции</h6></font></td>
                                                        <td class="cent"><h6>500</h6></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="cent"><font color="red"><h6>В т.ч. на быстроту обслуживания</h6></font></td>
                                                        <td class="cent"><h6>1 500</h6></td>
                                                    </tr>

                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <!-- End Tab Pane Popular -->

                                <!-- ___Tab Pane Video___ -->
                                <div role="tabpanel" class="tab-pane fade" id="video">
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <!--
                                                <div class="media-body media-left">
                                                    <div class="media-left__top">
                                                        <h3>Оставить оценку</h3>
                                                        <span>Выберите нужную категорию и оцените организацию</span>
                                                    </div>
                                                    <div class="media-left__bottom">
                                                        <div style="float:left;">
                                                            <select class="custom-select form-control">
                                                                <option>Общая оценка</option>
                                                                <option>Этика сотрудников</option>
                                                                <option>Скорость обслуживания</option>
                                                                <option>Отсутствие больших очередей</option>
                                                            </select>
                                                            <br>
                                                            <span style="font-size: 30px;" class="fa fa-star checked"></span>
                                                            <span style="font-size: 30px;" class="fa fa-star checked"></span>
                                                            <span style="font-size: 30px;" class="fa fa-star checked"></span>
                                                            <span style="font-size: 30px;" class="fa fa-star"></span>
                                                            <span style="font-size: 30px;" class="fa fa-star"></span>
                                                            <br>
                                                            <button class="btn btn-success form-control">Оценить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->

                                                <div class="media-left__top">
                                                    <h3>Пройти опрос</h3>
                                                    <span>Ваши ответы очень важны для достоверного построения рейтинга организации</span>

                                                </div>

                                                <div class="media-left__bottom">
                                                    <h5>С какими правонарушениями Вы сталкивались в данной организации?</h5>
                                                    <input type="checkbox" class="form-control"> Коррупционные правонарушения
                                                    <input type="checkbox" class="form-control"> Неэтичное поведение служащих
                                                    <input type="checkbox" class="form-control"> Истребование излишних документов
                                                    <input type="checkbox" class="form-control"> Нет, не сталкивался
                                                    <!--<br>
                                                    <hr>
                                                    <b>Ваш комментарий</b>
                                                    <textarea class="form-control"></textarea>-->
                                                    <button class="btn btn-success form-control">Отправить ответы</button>
                                                </div>

                                            </div><!-- End Media -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Tab Pane Video -->

                                <!-- ___Tab Pane Tag___ -->
                                <div role="tabpanel" class="tab-pane fade" id="tag">
                                    <div class="col-md-12 w-100">
                                        <div class="contact bg-box-shadow">
                                            <div class="contact-logo text-center">
                                                <i class="pe-7s-mail"></i>
                                                <p>Написать жалобу</p>
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
                                                                <label for="web">Выбрать ЭЦП</label>
                                                                <input type="file" class="form-control" id="web" name="web" >
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="button btn btn-default" >Отправить используя ЭЦП</button>
                                                            </div>
                                                        </div><!-- End Column 6 -->
                                                    </form><!-- End Form -->
                                                </div><!-- End Row -->
                                            </div><!-- End Contact Form -->




                                        </div>
                                    </div>
                                </div><!-- End Tab Pane Tag-->
                            </div><!-- End Tab Content -->
                        </div><!-- End Tab Panel -->
                    </div><!-- End Side Tab -->


                </div> <!-- End Column -->
            </div><!-- Content -->
        </div>

        <div class="col-md-12">
            <div class="contact bg-box-shadow">
                <div class="contact-logo text-center">
                    <p>Адрес учреждения</p>
                </div>
                <div class="contact-form">
                    <div class="mm-google-map bg-box-shadow common-border">
                        <div id="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A758d2c5a33155753f61f8263e6a39e84fd9952575915a6209f307670a228a75f&amp;width=100%25&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
