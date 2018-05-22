<div class="main-register-wrap modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Зарегистрироваться на <span>Елiм<strong>ай</strong></span></h3>
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Войти</a></li>
                    <li><a href="#tab-2">Регистрация с ЭЦП</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-content">
                        <div class="custom-form">
                            <form method="post"  name="registerform">
                                <label>Ваша почта * </label>
                                <input name="email" type="text"   onClick="this.select()" value="">
                                <label >Пароль * </label>
                                <input name="password" type="password"   onClick="this.select()" value="" >
                                <button type="submit"  class="log-submit-btn"><span>Войти</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Запомнить меня</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Забыли пароль?</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <div class="custom-form">
                                <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                    <input name="email" type="file"  class="form-control" onClick="this.select()" value="">
                                    <label >Выберите ЭЦП *</label>
                                    <label >Ваше имя * </label>
                                    <input name="name" type="text"   onClick="this.select()" value="">
                                    <label>Ваша фамилия *</label>
                                    <input name="name2" type="text"  onClick="this.select()" value="">
                                    <label>Ваша эл. почта *</label>
                                    <input name="email" type="text"  onClick="this.select()" value="">
                                    <label >Ваш пароль *</label>
                                    <input name="password" type="password"   onClick="this.select()" value="" >
                                    <button type="submit"     class="log-submit-btn"  ><span>Регистрация</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--register form end -->
<a class="to-top"><i class="fa fa-angle-up"></i></a>
</div>
