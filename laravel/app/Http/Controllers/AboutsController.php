<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AboutsController extends Controller{
   
    //------------------------------------关于租房网------------------------------
    public function abouts()
    {
        //查询信息
        $my = DB::table('my')->get();
        return view('abouts.abouts',['my'=>$my[0]]);
    }


    //-------------------------------------联系我们--------------------------------
    public function touch()
    {
         //查询信息
        $my = DB::table('my')->get();
        return view('abouts.touch',['my'=>$my[0]]);
    }
}