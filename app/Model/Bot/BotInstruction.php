<?php
namespace App\Model\Bot;
use Illuminate\Database\Eloquent\Model;

class BotInstruction extends Model{
    protected $table = 'bot_instruction';

    function relTags(){
        return $this->hasMany('App\Model\Bot\BotInstructionTag', 'insruct_id');
    }



}
