<?php
namespace App\Http\Controllers\Admin\Organ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Organization;
use App\Model\SysRegion;
use App\Model\SysCat;
use App\Model\TopManager;


class OrganController extends Controller{
    function getIndex (Request $request){
        $items = Organization::orderBy('name', 'asc');

        if ($request->has('name') && trim($request->get('name')) != '')
            $items = $items->where('name', 'like', '%'.$request->get('name').'%');

        $ar = array();
        $ar['title'] = 'Организации';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);
        $ar['ar_region'] = SysRegion::pluck('name', 'sys_key')->toArray();
        $ar['ar_cat'] = SysCat::pluck('name', 'id')->toArray();
        $ar['ar_manager'] = TopManager::pluck('full_name', 'id')->toArray();

        return view('admin.organ.organ.index', $ar);
    }

    function postItem(Request $request){
        $item = Organization::find($request->id);
        if (!$item)
            $item = new Organization();

        $item->cat_id = $request->get('cat_id');
        $item->manager_id = $request->get('manager_id');
        $item->region_key = $request->get('region_key');
        $item->name = $request->get('name');
        $item->geo_coord = json_encode($request->get('geo_coord'));
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getDelete(Request $request, $id ){
        $item = Organization::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
