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
                                <li role="presentation" class="active" style="width: 50%;"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab" >Отправить жалобу</a></li>
                                <li role="presentation" style="width: 50%;"><a href="#video" aria-controls="video" role="tab" data-toggle="tab" >Проверить жалобу</a></li>
                            </ul>

                            <div class="tab-content" style="padding: 0;">
                                <div role="tabpanel" class="tab-pane fade in active" id="popular" style="padding: 30px 15px;">
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
                                                <button type="submit" class="button btn btn-info btn-block" >Отправить используя ЭЦП</button>
                                            </div>
                                        </div><!-- End Column 6 -->
                                    </form><!-- End Form -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="video" style="padding: 30px 15px;">
                                    <form >
                                        <!-- ___Input .Name .Email. Website___ -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Номер жалобы</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>

                                            <div class="form-group">
                                                <label for="web">Приложите ЕЦП</label>
                                                <input type="file" class="form-control" id="web" name="web">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="button btn btn-info btn-block">Проверить</button>
                                            </div>
                                        </div>

                                    </form><!-- End Form -->
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
