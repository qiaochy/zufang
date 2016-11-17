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
    	//轮播广告
    	$ad_img = DB::table('ad')->where("is_show","=","1")->get();
    	// var_dump($room);die;
    	//新房上线
        $n_room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->orderBy('r_id','desc')
        ->take(3)
        ->get(); 
        foreach($n_room as $k=>$v){
        	$n_room[$k]['privape'] = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                
        }

        //管家推荐
        $g_room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->take(3)
        ->get(); 
        foreach($g_room as $k=>$v){
        	$g_room[$k]['privape'] = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                
        }
        //租户推荐（根据浏览量）
        $u_room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->orderBy('hits','desc')
        ->take(3)
        ->get(); 
        foreach($u_room as $k=>$v){
        	$u_room[$k]['privape'] = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                
        }                 
        // var_dump($room);die;
        return view("index/index",["ad_img"=>$ad_img,"n_room"=>$n_room,"g_room"=>$g_room,"u_room"=>$u_room]);
    }
}