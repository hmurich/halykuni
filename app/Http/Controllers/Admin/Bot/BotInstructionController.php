<?php
namespace App\Http\Controllers\Admin\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Bot\BotInstruction;
use App\Model\Bot\BotInstructionTag;
use App\Model\Bot\BotCat;

class BotInstructionController extends Controller{
    function getIndex (Request $request){
        $items = BotInstruction::orderBy('note', 'asc');

        if ($request->has('cat_id') && $request->get('cat_id'))
            $items = $items->where('cat_id', $request->get('cat_id'));
        if ($request->has('tag') && $request->get('tag'))
            $items = $items->whereHas('relTags', function($q) use ($request){
                $q->where('tag', 'like', '%'.$request->tag.'%');
            });



        $ar = array();
        $ar['title'] = 'Бот. Инструкции.';
        $ar['request'] = $request;
        $ar['items'] = $items->with('relTags')->paginate(24);
        $ar['ar_cat'] = BotCat::pluck('name', 'id')->toArray();

        return view('admin.bot.instruction.index', $ar);
    }

    function postItem(Request $request){
        $item = BotInstruction::find($request->id);
        if (!$item){
            $item = new BotInstruction();
        }

        $item->page_key = $request->get('page_key');
        $item->note = $request->get('note');
        $item->save();

        return redirect()->back()->with('success', 'Сохранено');
    }

    function getDelete(Request $request, $id ){
        $item = BotInstruction::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Удалено');
    }

}
