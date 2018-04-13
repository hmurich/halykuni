<?php
namespace App\Http\Controllers\Admin\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Bot\BotPageTip;

class BotPageTipController extends Controller{
    function getIndex (Request $request){
        $items = BotPageTip::orderBy('note', 'asc');

        if ($request->has('page_key') && $request->get('page_key'))
            $items = $items->where('page_key', $request->get('page_key'));
        if ($request->has('note') && $request->get('note'))
            $items = $items->where('note', 'like', '%'.$request->get('note').'%');



        $ar = array();
        $ar['title'] = 'Бот. Подсказки на страницах.';
        $ar['request'] = $request;
        $ar['items'] = $items->paginate(24);
        $ar['ar_page'] = BotPageTip::getPageAr();

        return view('admin.bot.page_tip.index', $ar);
    }

    function postItem(Request $request){
        $item = BotPageTip::find($request->id);
        if (!$item){
            $item = new BotPageTip();
        }

        $item->page_key = $request->get('page_key');
        $item->note = $request->get('note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getDelete(Request $request, $id ){
        $item = BotPageTip::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
