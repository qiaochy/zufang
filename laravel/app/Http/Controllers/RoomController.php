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
<<<<<<< HEAD
        $region_id = $request->input("region_id") ? $request->input("region_id") : '%';
        $price = $request->input("price") ? $request->input("price") : 0;
        $priced = $request->input("priced")? $request->input("priced") : 20000;
        $cat_id = $request->input("cat_id") ? $request->input("cat_id") : '%';
        $p_id = $request->input("p_id") ? $request->input("p_id") : '%';
        // $r_title = $request->input("r_title") ? $request->input("r_title") : '';
=======
        $region_name = $request->input("region_name") ? $request->input("region_name") : '%';//地区
        $cat_name = $request->input("cat_name") ? $request->input("cat_name") : '%';//户型
        $begin = $request->input("begin") ? $request->input("begin") : '1';//价格区间
        $end = $request->input("end") ? $request->input("end") : '99999';//价格区间
        $direct = $request->input("direct") ? $request->input("direct")."%" : '%';//户型
    
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
<<<<<<< HEAD
        ->where('house.region_id','like',"$region_id")
        ->where('house.cat_id','like',"$cat_id")
        // ->where('r_title','like',"%$r_title%")
        ->whereBetween('r_price', [$price, $priced])
=======
        ->where('region_name','like',$region_name)
        ->where('cat_name','like',$cat_name)
        ->where('direct','like',$direct)
        ->whereBetween('r_price', [$begin, $end])
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
        ->orderBy($order,'desc')
        ->get();      
        //查询房间配置
        if($p_id=="%")
        {
            foreach($room as $k=>$v)
            {
            	$privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
            	$room[$k]['privape'] = $privape;
            }
        }else
        {
            foreach($room as $k=>$v)
            {
                $privape = DB::table('rp')->where('r_id','=',$p_id)->get();
                $room[$k]['privape'] = $privape;
            }
        }
        //查询地区
        $region = DB::table('region')
                        ->where('parent_id','!=','0')
                        ->get();
<<<<<<< HEAD
        //查询居室
        $cate = DB::table('category')->where("is_show","=","1")->get();

        return view('room.room',['room'=>$room,'region'=>$region,'cate'=>$cate]);
=======
        //查询户型
        $category = DB::table('category')->get();            
        return view('room.room',['room'=>$room,'region'=>$region,'cate'=>$category]);
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
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
             $map[$k][]="<a href=''>".$v['h_name']."</a>";
        }
        echo json_encode($map);
    }
}