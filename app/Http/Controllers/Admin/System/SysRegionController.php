<?php
namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\SysRegion;

class SysRegionController extends Controller{
    function getIndex (Request $request){
        $items = SysRegion::orderBy('sys_key', 'asc');

        if ($request->has('sys_key') && $request->get('sys_key'))
            $items = $items->where('sys_key', 'like', '%'.$request->get('sys_key').'%');
        if ($request->has('name') && $request->get('name'))
            $items = $items->where('name', 'like', '%'.$request->get('name').'%');

        $ar = array();
        $ar['title'] = 'Справочник регионов';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);

        return view('admin.system.region.index', $ar);
    }

    function postItem(Request $request){
        $item = SysRegion::find($request->id);
        if (!$item)
            $item = new SysRegion();

        $item->is_settl = $request->get('is_settl');
        $item->sys_key = $request->get('sys_key');
        $item->name = $request->get('name');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getChangeActive(Request $request, $id ){
        $item = SysRegion::findOrFail($id);
        $item->is_active = ($item->is_active ? 0 : 1);
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

}
