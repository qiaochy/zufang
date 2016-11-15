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
        $region_id = $request->input("region_id") ? $request->input("region_id") : '%';
        $price = $request->input("price") ? $request->input("price") : 0;
        $priced = $request->input("priced")? $request->input("priced") : 20000;
        $cat_id = $request->input("cat_id") ? $request->input("cat_id") : '%';
        $p_id = $request->input("p_id") ? $request->input("p_id") : '%';
        // $r_title = $request->input("r_title") ? $request->input("r_title") : '';
        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id',"house.h_id")
        ->where('r_status','=','0')
        ->where('house.region_id','like',"$region_id")
        ->where('house.cat_id','like',"$cat_id")
        // ->where('r_title','like',"%$r_title%")
        ->whereBetween('r_price', [$price, $priced])
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
        //查询居室
        $cate = DB::table('category')->where("is_show","=","1")->get();

        return view('room.room',['room'=>$room,'region'=>$region,'cate'=>$cate]);
    }


    //房屋详情页面
    public function roomcon(Request $request){
        $r_id = $request->input("r_id");
        //当前房间
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->Join('pattern','house.pay','=','pattern.wid')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id','ways',"area","house.h_id")
        ->where('r_status','=','0')
        ->where('room.r_id','=',"$r_id")
        ->first();
        //公共设施
        $privape = DB::table('rp')->where('r_id','=',$r_id)->get();
        //相册
        $img = DB::table('img')->where('h_id','=',$room['h_id'])->get();
        //所有房间详情
        $roomd = DB::table('room')->where('h_id','=',$room['h_id'])->get();
        
        foreach($roomd as $k=>$v){
            $privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
            $roomd[$k]['privape'] = $privape;
        }
         //var_dump($roomd);die;
         //房屋必备设施
         $conf = DB::table('hc')
         ->Join('conf','conf.con_id','=','hc.con_id')
         ->where('h_id','=',$room['h_id'])
         ->get();
         // var_dump($conf);die;
         //猜你喜欢
         $like = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->Join('pattern','house.pay','=','pattern.wid')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id','ways',"area","house.h_id")
        ->where('r_status','=','0')
        ->where('region.region_name','like',$room["region_name"])
        ->get();
        foreach($like as $k=>$v){
            $privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
            $like[$k]['privape'] = $privape;
        }
        // var_dump($like);die;
        return view('room.roomcon',["room"=>$room,'privape'=>$privape,"img"=>$img,"roomd"=>$roomd,"conf"=>$conf,"like"=>$like]);
    	// return view('room.roomcon');
    }
}