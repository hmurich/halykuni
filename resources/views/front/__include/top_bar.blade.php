<div class="top-bar">
    <div class="top-bar-head">
        <div class="search">
            <i class="pe-7s-info showSingle" id="1"></i>
            <p style="cursor: pointer;" onClick="open_advicer();">Получить консультацию</p>
        </div>
        <div class="login-user pull-right showSingle" id="2">
            <p>Регистрация/Вход по ЭЦП</p>
            <i class="pe-7s-user showSingle"></i>
        </div>

    </div>
    <!-- End Top Bar Head -->

    <!-- ___Start Top Bar Body___ -->
    <div class="top-bar-body">
        <div class="search-body targetDiv" id="div1">
            <p>Роботизированная система консультаций "ЮрСоветник" </p>

                <input type="text" class="form-control no-radius" placeholder="Впишите сюда ключевые слова Вашего вопроса">

                <button class="form-control btn btn-success" onClick="open_advicer();">Найти</button>

        </div>

        <!-- ___Start Top Bar Login Body___ -->
        <div class="user-body targetDiv" id="div2">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-account">
                        <p>Вход</p>
                        <form>
                            <div class="form-group">
                                <input type="file" class="form-control no-radius" placeholder="Ваша почта">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control no-radius" placeholder="Пароль для ЭЦП">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Войти по ЭЦП</button>
                                </span>
                            </div><!-- Input Group -->
                            <div class="forgot-pass">Забыли <a href="#0">пароль?</a></div>
                        </form>
                    </div><!-- End Login Account -->
                </div><!-- End Column -->

                <div class="dashed-divider"></div>
                <div class="col-md-6">
                    <p><b>Регистрация</b></p>
                    <div class="register">

                        <button type="submit" class="btn btn-default form-control no-radius">Зарегистрироваться по ЭЦП</button>
                    </div>
                </div><!-- End Column -->
            </div><!-- End Row -->
        </div>
        <!-- End Top Bar Login Body -->


    </div><!-- End Top Bar Body -->
</div>
<!-- End Top Bar -->
