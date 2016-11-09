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
    public function room(Request $request)
    {
        //接值
        $order = $request->input("asc") ? $request->input("asc") :'r_id';//排序
        $region_id = $request->input("region_id") ? $request->input("region_id") : '';
        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id')
        ->where('r_status','=','0')
        ->orderBy($order,'desc')
        ->get();      
        //查询房间配置
        foreach($room as $k=>$v)
        {
        	$privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
        	$room[$k]['privape'] = $privape;
        }
        //查询地区
        $region = DB::table('region')
                        ->where('parent_id','!=','0')
                        ->get();
                        
        return view('room.room',['room'=>$room,'region'=>$region]);
    }
    //房屋详情页面
    public function roomcon(){
    	return view('room.roomcon');
    }
}