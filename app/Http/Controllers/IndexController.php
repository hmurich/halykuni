<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Organization;

class IndexController extends Controller{
    function getIndex (){
        $ar = array();
        $ar['title'] = 'Главная';

        return view('front.index', $ar);
    }

    function getAjaxOrg(){
        $ar_id = Organization::pluck('id')->toArray();

        for ($i = 0; $i<round(count($ar_id) / 2); $i++) {
            $rand_k = rand($i, (count($ar_id) - 1));
            unset($ar_id[$rand_k]);
        }
        return response()->json([
            'items' => Organization::whereIn('id', $ar_id)->get()
        ]);
    }

    function getAbout(){
        $ar = [];
        $ar['title'] = 'Об организации';

        return view('front.about', $ar);
    }

    function getBudzhet(){
        $ar = [];
        $ar['title'] = 'Бюджет организации';

        return view('front.budzhet', $ar);
    }

    function getOtzyvy(){
        $ar = [];
        $ar['title'] = 'Отзывы об организации';

        return view('front.otzyvy', $ar);
    }

    function getOrglist(){
        $ar = [];
        $ar['title'] = 'Организации списком';

        return view('front.spisok', $ar);
    }

    function getAppeal(){
        $ar = [];
        $ar['title'] = 'Проверка жалобы';

        return view('front.appeal', $ar);
    }

    function getHistory(){
        $ar = [];
        $ar['title'] = 'История организации';

        return view('front.history', $ar);
    }

}
