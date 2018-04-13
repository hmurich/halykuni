<div class="container">
    <div class="navbar p-0">
        <a class="navbar-brand" href="{{ action('Admin\IndexController@getIndex') }}">
            HalykUni
        </a>
        <div class="nav order-lg-2">
            <div class="dropdown ml-3">
                <a href="#" class="nav-link" data-toggle="dropdown">
                    <span class="ml-2 d-none d-lg-block">
                        <span class="text-default">{{ Auth::user()->name }}</span>
                        <small class="text-muted d-block mt-1">{{ Auth::user()->relType->name }}</small>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ action('Admin\ProfileController@getIndex') }}">
                        <span>Профайл</span>
                    </a>
                    <a class="dropdown-item" href="{{ action('LoginController@getLogout') }}">
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
