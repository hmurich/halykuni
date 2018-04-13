<?php
namespace App\Http\Controllers\Admin\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Bot\BotCat;
use App\Model\Bot\BotCatDecision;
use App\Model\Bot\BotCatAlert;

class BotCatController extends Controller{
    function getIndex (Request $request){
        $items = BotCat::orderBy('name', 'asc');

        if ($request->has('name') && $request->get('name'))
            $items = $items->where('name', 'like', '%'.$request->get('name').'%');

        $parent_id = 0;
        if ($request->has('parent_id') && $request->get('parent_id') > 0){
            $items = $items->where('parent_id', $request->get('parent_id'));
            $parent_id = $request->get('parent_id');
        }
        else
            $items = $items->where('parent_id', 0);

        $ar = array();
        $ar['title'] = 'Бот. Категории.';
        $ar['request'] = $request;
        $ar['items'] = $items->with('relDecision', 'relAlert')->paginate(24);
        $ar['parent_id'] = $parent_id;
        $ar['ar_cat'] = BotCat::pluck('name', 'id')->toArray();

        return view('admin.bot.cat.index', $ar);
    }

    function postItem(Request $request){
        $item = BotCat::find($request->id);
        if (!$item){
            $item = new BotCat();
            $item->parent_id = $request->get('parent_id');
        }

        $item->name = $request->get('name');
        $item->short_note = $request->get('short_note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function postDecision(Request $request){
        $item = BotCatDecision::find($request->id);
        if (!$item){
            $item = new BotCatDecision();
            $item->cat_id = $request->get('cat_id');
        }

        $item->short_note = $request->get('short_note');
        $item->note = $request->get('note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function postAlert(Request $request){
        $item = BotCatAlert::find($request->id);
        if (!$item){
            $item = new BotCatAlert();
            $item->cat_id = $request->get('cat_id');
        }

        $item->short_note = $request->get('short_note');
        $item->note = $request->get('note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }


    function getDelete(Request $request, $id ){
        $item = BotCat::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
