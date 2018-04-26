<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller{

    function getIndex(Request $request){
        $ar = [];
        $ar['title'] = 'Контроль за качеством оказания государственных услуг';
        $ar['request'] = $request;

        return view('admin.report.sample.index', $ar);
    }

}
