<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class AdminAuth {
    protected $auth;

    function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next){
        if ($this->auth->guest())
            return redirect()->action('LoginController@getLogin')->with('error', 'Введите логин и пароль, для доступа в админку');

        if ($this->auth->user()->type_id != 1)
            return redirect()->back()->with('error', 'У Вас нет прав для просмотра данного раздела');
            
        return $next($request);
    }
}
