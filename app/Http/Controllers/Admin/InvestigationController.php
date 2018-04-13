<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Investigation;
use App\Model\SysRegion;

class InvestigationController extends Controller{
    function getIndex (Request $request){
        $items = Investigation::orderBy('id', 'desc');

        if ($request->has('title') && trim($request->get('title')) != '')
            $items = $items->where('title', 'like', '%'.$request->get('title').'%');

        if ($request->has('region_key') && trim($request->get('region_key')) != '')
            $items = $items->where('region_key', 'like', '%'.$request->get('region_key').'%');

        $ar = array();
        $ar['title'] = 'Расследования';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);
        $ar['ar_region'] = SysRegion::pluck('name', 'sys_key')->toArray();

        return view('admin.investigation.index', $ar);
    }

    function postItem(Request $request){
        $item = Investigation::find($request->id);
        if (!$item)
            $item = new Investigation();

        $item->title = $request->get('title');
        $item->note = $request->get('note');
        $item->short_note = $request->get('short_note');
        $item->region_key = $request->get('region_key');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getDelete(Request $request, $id ){
        $item = Investigation::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
