<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UploadController extends Controller{

    function getIndex(){
        $ar = [];
        $ar['title'] = 'Загрузка отчета';

        return view('admin.report.upload.index', $ar);
    }
    function postIndex(){

        return redirect()->action('Admin\Report\SampleController@getIndex')->with('success', 'Сохранено');
    }
}
