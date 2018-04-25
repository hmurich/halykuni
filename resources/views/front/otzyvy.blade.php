@extends('front.layout_about')

@section('title', $title)

@section('content')
<!-- ___Start About Octagon___ -->
<div class="main-content">
    <div class="row" style="margin-top:-90px;">
        <div class="col-md-12 w-100">
            <div class="text-center">

                <div class="sidebar-widget sidebar-tab">
                    <div role="tabpanel">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="popular">
                                <center><h4 class="title">Отзывы</h4></center>
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="media-body media-left">
                                                <div class="media-left__top">
                                                    <span>Январь 20, 2018</span>
                                                </div>
                                                <div class="media-left__bottom">
                                                    <p>
                                                    Отличная школа! Сама в ней училась, никогда не видела проявлений коррупции!</p>
                                                    <a href="">Подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media" style="    margin-left: 30px;color: #0060d6;">
                                            <div class="media-body media-left">
                                                <div class="media-left__top">
                                                    <span>Январь 20, 2018</span>
                                                </div>
                                                <div class="media-left__bottom">
                                                    <p>Отличная школа! Сама в ней училась, никогда не видела проявлений коррупции!</p>
                                                    <a href="">Подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-body media-left">
                                                <div class="media-left__top">

                                                    <span>Февраль 28, 2018</span>
                                                </div>
                                                <div class="media-left__bottom">
                                                    <p>
                                                    Да, ребенок ходит уже в шестой класс, всегда отзывчивое руководство</p>
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
                                            <p>Написать  отзыв</p>
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

                        </div><!-- End Tab Content -->
                    </div><!-- End Tab Panel -->
                </div><!-- End Side Tab -->


            </div> <!-- End Column -->
        </div><!-- Content -->
    </div> <!-- End Row -->
</div>

<!-- End Main Content -->
@endsection
