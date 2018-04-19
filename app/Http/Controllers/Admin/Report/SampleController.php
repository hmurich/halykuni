<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller{

    function getIndex(){
        $ar = [];
        $ar['title'] = 'Качество оказания гос. услуг';

        return view('admin.report.sample.index', $ar);
    }
    
}
