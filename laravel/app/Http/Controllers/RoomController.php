<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Cache;

class RoomController extends Controller{
	//表单页面
    public function room(Request $request)
    {
        //接值
        $order = $request->input("asc") ? $request->input("asc") :'r_id';//排序
        $region_name = $request->input("region_name") ? $request->input("region_name") : '%';//地区
        $cat_name = $request->input("cat_name") ? $request->input("cat_name") : '%';//户型
        $begin = $request->input("begin") ? $request->input("begin") : '1';//价格区间
        $end = $request->input("end") ? $request->input("end") : '99999';//价格区间
        $direct = $request->input("direct") ? $request->input("direct")."%" : '%';//户型
    
        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id')
        ->where('r_status','=','0')
        ->where('region_name','like',$region_name)
        ->where('cat_name','like',$cat_name)
        ->where('direct','like',$direct)
        ->whereBetween('r_price', [$begin, $end])
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
        //查询户型
        $category = DB::table('category')->get();            
        return view('room.room',['room'=>$room,'region'=>$region,'cate'=>$category]);
    }
    //房屋详情页面
    public function roomcon(){
    	return view('room.roomcon');
    }
    //地图找房
    public function map()
    {
        return view('room.map');
    }
    //地图信息
    public function maptext()
    {
        $sql = DB::table('house')->get();
        foreach($sql as $k=>$v)
        {
             $map[$k][]=$v['coord'];
             $map[$k][]=$v['roord'];
             $map[$k][]="租房地址：<a href=''>".$v['detail']."</a>";
        }
        echo json_encode($map);
    }
}