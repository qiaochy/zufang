<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class RoomController extends Controller{
	//表单页面
    public function room()
    {
        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img')
        ->where('r_status','=','0')
        ->get();
        return view('room.room',['room'=>$room]);
    }
}