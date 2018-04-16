<?php
namespace App\Http\Controllers\Admin\Bot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Bot\BotInstruction;
use App\Model\Bot\BotInstructionAnswer;
use App\Model\Bot\BotInstructionQuestion;
use App\Model\Bot\BotInstructionQuestionTip;

class BotInstuctionConstructorController extends Controller{
    function getIndex (Request $request, $instruct_id){
        $instruct = BotInstruction::findOrFail($instruct_id);
    }

    function postAddQuestion(Request $request){

    }

    function postDeleteQuestion(Request $request){

    }

    function postAddQuestionTip(Request $request){

    }

    function postDeleteQuestionTip(Request $request){

    }

    function postAddAnswer(Request $request){

    }

    function postDeleteAnswer(Request $request){

    }

}
