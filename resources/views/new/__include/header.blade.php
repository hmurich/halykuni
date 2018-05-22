<!-- header-->
<header class="main-header dark-header fs-header sticky">
    <div class="header-inner">
        <div class="logo-holder" style="color: #fff; padding: 25px 0 0 0;font-size: 120%;">
            <!--<a href="."><img src="/new/images/logo_full.png" alt=""></a>-->
            Интерактивная карта <span style="color:#ebbe06">общественного контроля</span>
        </div>
        <div class="header-search vis-header-search">
            <div class="header-search-input-item">
                <input type="text" placeholder="Поиск" value=""/>
            </div>
            <div class="header-search-select-item">
                <select data-placeholder="All Categories" class="chosen-select" >
                    <option>Все категории</option>
                    <option>Образование</option>
                    <option>Медицина</option>
                    <option>Поликлинники</option>
                    <option>Акиматы</option>
                    <option>Университеты</option>
                </select>
            </div>
            <a href='/map' class="header-search-button">Искать</a>
        </div>
        <div class="show-search-button"><i class="fa fa-search"></i> <span>Поиск</span></div>
        <a href="#help" class="add-list" onClick="open_advicer();">Консультация <span><i class="fa fa-question-circle"></i></span></a>
        <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Войти</div>
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap color-bg">
            <div class="nav-button">

            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="/" class="act-link">Главная <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="#">Для чего эта карта?</a></li>
                            <li><a href="#">Как пользоваться?</a></li>
                            <li><a href="#">Как подать жалобу?</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="{{ action('IndexController@getSum') }}" >Бюджет</a>
                    </li>
                    <li>
                        <a href="{{ action('IndexController@getMap') }}" >Рейтинг </a>
                    </li>
                    <li>
                        <a href="#">Жалоба</a>
                    </li>
                    <li>
                        <a href="#">Новости <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="#">Коррупция</a></li>
                            <li><a href="#">Проверки</a></li>
                            <li><a href="#">Переназначения</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</header>
<!--  header end -->
