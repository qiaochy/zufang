<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class IndexController extends Controller{
	//首页
    public function index(){
      	$ad_img = DB::table('ad')->where("is_show","=","1")->get();
           //热词前五条
    	     $data = DB::table('hot')->where("is_show","=","1")->orderBy('click_num','desc')->limit(5)->get();
          return view("index/index",["ad_img"=>$ad_img,'data'=>$data]);
    }
<<<<<<< HEAD
    public function search(Request $request){
          $search =$request->input('search_text');
        
    }

=======
>>>>>>> f224c521d2132410e4a9b81250832b7134b82c85
}