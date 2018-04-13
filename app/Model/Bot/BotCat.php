<?php
namespace App\Model\Bot;
use Illuminate\Database\Eloquent\Model;

class BotCat extends Model{
    protected $table = 'bot_cat';

    function relDecision(){
        return $this->hasOne('App\Model\Bot\BotDecision', 'cat_id');
    }

    function relAlert(){
        return $this->hasOne('App\Model\Bot\BotAlert', 'cat_id');
    }



}
