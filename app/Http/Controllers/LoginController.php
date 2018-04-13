<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class LoginController extends Controller{
    function getLogin (){
        /*
        $user = new User();
        $user->login = 'admin';
        $user->password = Hash::make('346488');
        $user->type_id = 1;
        $user->save();
        */
        $ar = array();
        $ar['title'] = 'Форма входа';
        $ar['action'] = action('LoginController@postLogin');

        return view('admin.login', $ar);
    }

    function postLogin(Request $request){
        if (!Auth::attempt(['login' => $request->input('login'), 'password' => $request->input('password'), 'is_active'=>1]))
            return back()->with('error', 'Не правильный email/пароль');

        if (Auth::user()->type_id == 1)
            return redirect()->action('Admin\IndexController@getIndex');
        else
            abort(404);
    }

    function getLogout(){
        Auth::logout();

        return redirect()->to('/');
    }
}
