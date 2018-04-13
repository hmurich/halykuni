<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\TopManager;

class TopManagerController extends Controller{
    function getIndex (Request $request){
        $items = TopManager::orderBy('full_name', 'asc');

        if ($request->has('full_name') && trim($request->get('full_name')) != '')
            $items = $items->where('full_name', 'like', '%'.$request->get('full_name').'%');

        $ar = array();
        $ar['title'] = 'Директора';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);

        return view('admin.director.index', $ar);
    }

    function postItem(Request $request){
        $item = TopManager::find($request->id);
        if (!$item)
            $item = new TopManager();

        $item->full_name = $request->get('full_name');
        $item->date_b = $request->get('date_b');
        $item->note = $request->get('note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getDelete(Request $request, $id ){
        $item = TopManager::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
