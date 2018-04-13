<?php
namespace App\Model\Bot;
use Illuminate\Database\Eloquent\Model;

class BotPageTip extends Model{
    protected $table = 'bot_page_tip';

    static function getPageAr(){
        return [
            'all' => 'Обшие подсказки',
            'index' => 'Главная страница',
            'map' => 'Страница карты'
        ];
    }

}
