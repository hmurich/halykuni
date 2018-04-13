<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class ProfileController extends Controller{
    function getIndex(Request $request){
        $ar = array();
        $ar['title'] = 'Профайл';
        $ar['user'] = $request->user();

        return view('admin.profile', $ar);
    }

    function postIndex(Request $request){
        $user = $request->user();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function postChangePass(Request $request){
        $user = $request->user();
        if (User::where('id', '<>', $user->id)->where('login', $request->login)->count() > 0)
            return redirect()->back()->with('error', 'Указанный логн уже используеться');

        $user->login = $request->login;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Сохранено');
    }
}
