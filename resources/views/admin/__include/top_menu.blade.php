<div class="container">
    <div class="row align-items-center">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-link"><i class="fe fe-home"></i> Главная</a>
                </li>
                <!--
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-file-text"></i> Заявки</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Список</a>
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Карта</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fa fa-dollar"></i> Платежи</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Контракты</a>
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Платежи</a>
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Импорт платежей</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-user"></i> Контрагенты</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Все</a>
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Физ. лица</a>
                        <a href="{{ action('Admin\IndexController@getIndex') }}" class="nav-item ">Юр. лица</a>
                    </div>
                </li>
                -->
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-server"></i> Отчеты</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\Report\UploadController@getIndex') }}" class="nav-item ">Форма загрузки</a>
                        <a href="{{ action('Admin\Report\SampleController@getIndex') }}" class="nav-item ">Авто-анализ отчетов</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-tablet"></i>Модули</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\InvestigationController@getIndex') }}" class="nav-item ">Расследования</a>
                        <a href="{{ action('Admin\TopManagerController@getIndex') }}" class="nav-item ">Качество гос услуг</a>
                        <a href="{{ action('Admin\Organ\OrganController@getIndex') }}" class="nav-item ">Органы</a>

                    </div>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-calendar"></i>Бот</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\Bot\BotCatController@getIndex') }}" class="nav-item ">Категории</a>
                        <a href="{{ action('Admin\Bot\BotInstructionController@getIndex') }}" class="nav-item ">Инструкции</a>
                        <a href="{{ action('Admin\Bot\BotPageTipController@getIndex') }}" class="nav-item ">Подсказки</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"><i class="fe fe-settings"></i> Системные</a>
                    <div class="nav-submenu nav">
                        <a href="{{ action('Admin\System\SysRegionController@getIndex') }}" class="nav-item ">Регионы</a>
                        <a href="{{ action('Admin\System\SysCatController@getIndex') }}" class="nav-item ">Категории</a>
                        <a href="{{ action('Admin\System\UserController@getIndex') }}" class="nav-item ">Пользователи</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
