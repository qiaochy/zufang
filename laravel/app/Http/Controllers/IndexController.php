<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class IndexController extends Controller{
	//表单页面
    public function index(){
    	$ad_img = DB::table('ad')->where("is_show","=","1")->get();
    	// var_dump($room);die;
        return view("index/index",["ad_img"=>$ad_img]);
    }
}