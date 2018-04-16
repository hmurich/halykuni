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
        return response()->json([
            'items' => Organization::all()
        ]);
    }

    function getAbout(){
        $ar = [];
        $ar['title'] = 'Об организации';

        return view('front.about', $ar);
    }

}
