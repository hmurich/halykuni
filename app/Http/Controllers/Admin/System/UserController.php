<?php
namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\User;
use App\Model\SysUserType;
use Hash;

class UserController extends Controller{
    function getIndex (Request $request){
        $items = User::orderBy('login', 'asc');

        if ($request->has('login') && $request->get('login') != '')
            $items = $items->where('login', 'like', '%'.$request->get('login').'%');
        if ($request->has('name') && $request->get('name') != '' )
            $items = $items->where('name', 'like', '%'.$request->get('name').'%');
        if ($request->has('type_id') && $request->get('type_id') > 0 )
            $items = $items->where('type_id', $request->get('type_id'));

        $ar = array();
        $ar['title'] = 'Справочник пользователей';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);
        $ar['ar_type'] = SysUserType::pluck('name', 'id')->toArray();

        return view('admin.system.user.index', $ar);
    }

    function postItem(Request $request){
        $item = User::find($request->id);

        if (($item && User::where('login', $request->login)->where('id', '<>', $item->id)->count() > 0) ||
            User::where('login', $request->login)->count() > 0)
            return redirect()->back()->with('error', 'Указанный логин уже занят');

        if (!$item)
            $item = new User();

        $item->name = $request->name;
        $item->contact = $request->contact;
        $item->address = $request->address;
        $item->login = $request->login;
        $item->type_id = $request->type_id;
        $item->password = Hash::make($request->password);
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getChangeActive(Request $request, $id ){
        $item = User::findOrFail($id);
        $item->is_active = ($item->is_active ? 0 : 1);
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

}
