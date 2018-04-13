<?php
namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\SysCat;

class SysCatController extends Controller{
    function getIndex (Request $request){
        $items = SysCat::orderBy('name', 'asc');

        if ($request->has('name') && $request->get('name'))
            $items = $items->where('name', 'like', '%'.$request->get('name').'%');

        $ar = array();
        $ar['title'] = 'Справочник категорий';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);

        return view('admin.system.cat.index', $ar);
    }

    function postItem(Request $request){
        $item = SysCat::find($request->id);
        if (!$item)
            $item = new SysCat();

        $item->name = $request->get('name');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getChangeActive(Request $request, $id ){
        $item = SysCat::findOrFail($id);
        $item->is_active = ($item->is_active ? 0 : 1);
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

}
