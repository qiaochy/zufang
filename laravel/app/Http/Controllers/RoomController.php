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
        $count = count(DB::table('room')->where('r_status','=','0')->get());//总条数;
        $num = 2;//条数
        $cou = ceil($count/$num);//显示多少页
        $pages = 0;

        //查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->orderBy($order,'desc')
        ->skip($pages)->take($num)
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
        //查询居室
        $cate = DB::table('category')->where("is_show","=","1")->get();

        return view('room.room',['room'=>$room,'region'=>$region,'cate'=>$cate,'cou'=>$cou]);
    }
//多条件查询
    public function where(Request $request)
    {
        //接值
        $search_text = $request->input("search_text");//搜索值
        $order = $request->input("asc") ? $request->input("asc") :'r_id';//排序
        $region_id = $request->input("region_id") ? $request->input("region_id") : '%';//
        $price = $request->input("price") ? $request->input("price") : 0;
        $priced = $request->input("priced")? $request->input("priced") : 20000;
        $cat_id = $request->input("cat_id") ? $request->input("cat_id") : '%';
        $p_id = $request->input("p_id") ? $request->input("p_id") : '%';
        if($search_text)
        {
            //搜索
             //查库
        $room = DB::table('house')
                        ->Join('room','room.h_id','=','house.h_id')
                        ->Join('category','house.cat_id','=','category.cat_id')
                        ->Join('region','house.region_id','=','region.region_id')
                        ->Join('orientation','house.direction','=','orientation.did')
                        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
                        ->where('r_status','=','0')
                        ->where('region_name','like',"%$search_text%")
                        ->orWhere('direct','like',"%$search_text%")
                        ->orWhere('r_name','like',"%$search_text%")
                        ->orWhere('cat_name','like',"%$search_text%")
                        ->get();

          //分页
        $count = count($room);//总条数;
        $num = 2;//条数
        $cou = ceil($count/$num);//显示多少页
        $page = $request->input('page') ? $request->input('page') : 0;
        $pages = ($page-1)*$num;
         //查库
        $room = DB::table('house')
                        ->Join('room','room.h_id','=','house.h_id')
                        ->Join('category','house.cat_id','=','category.cat_id')
                        ->Join('region','house.region_id','=','region.region_id')
                        ->Join('orientation','house.direction','=','orientation.did')
                        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
                        ->where('r_status','=','0')
                        ->where('region_name','like',"%$search_text%")
                        ->orWhere('direct','like',"%$search_text%")
                        ->orWhere('r_name','like',"%$search_text%")
                        ->orWhere('cat_name','like',"%$search_text%")
                        ->skip($pages)->take($num)
                        ->get(); 
         foreach($room as $k=>$v)
            {
                $privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                $room[$k]['privape'] = $privape;
            }
        }else
        {
         //多条件查库
        $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->where('house.region_id','like',"$region_id")
        ->where('house.cat_id','like',"$cat_id")
        ->whereBetween('r_price', [$price, $priced])
        ->orderBy($order,'desc')
        ->get();
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
                                    $privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                                    foreach ($privape as $ke => $va)
                                    {
                                        if($p_id==$va['p_id'])
                                        {
                                            $room[$k]['privape'] = $privape;
                                        }

                                    }
                                    if(!array_key_exists('privape',$room[$k]))
                                    {
                                        unset($room[$k]);
                                    } 
                         }
             } 
        //分页
        $count = count($room);//总条数;
        $num = 2;//条数
        $cou = ceil($count/$num);//显示多少页
        $page = $request->input('page') ? $request->input('page') : 0;
        $pages = ($page-1)*$num;
        //分页查库
         $room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id')
        ->where('r_status','=','0')
        ->where('house.region_id','like',"$region_id")
        ->where('house.cat_id','like',"$cat_id")
        ->whereBetween('r_price', [$price, $priced])
        ->orderBy($order,'desc')
        ->skip($pages)->take($num)
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
                                    $privape = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                                    foreach ($privape as $ke => $va)
                                    {
                                        if($p_id==$va['p_id'])
                                        {
                                            $room[$k]['privape'] = $privape;
                                        }

                                    }
                                    if(!array_key_exists('privape',$room[$k]))
                                    {
                                        unset($room[$k]);
                                    } 
                         }
             }
    }
            //拼接
          foreach($room as $item)
        {
            echo '<div class="r_lbx">';
            echo '<a href="roomcon?r_id='.$item['r_id'].' "class="rimg"><img src="http://www.feng.com:8080/house/zufang/zufang/yii2/backend/web/'.$item['r_img'].'"></a>';
            echo "<div class='r_lbx_cen'>";
            echo '<a href="#">'.$item['region_name'].$item['h_name'].$item['r_title'].$item['direct'].$item['r_name'].'</a><div class="r_lbx_cena">';   
            echo  $item['survey'];
            echo '</div><div class="r_lbx_cenb">';
            echo $item['r_area'].'㎡ | '.$item['floor'].'|'.$item['cat_name'].'|'.$item['direct'];
            echo '</div><div class="r_lbx_cenc">';
            foreach($item['privape'] as $val)
            {
                if($val['p_id']==1)
                {
                    echo ' <span>独立卫生间</span>';
                }
                 if($val['p_id']==2)
                {
                    echo ' <span>独立淋浴</span>';
                }
                 if($val['p_id']==3)
                {
                    echo ' <span>独立阳台</span>';
                }
            }
            echo '</div></div><div class="r_lbx_money"><div class="r_lbx_moneya"><span class="ty_a">￥</span>';
            echo '<span class="ty_b">'.$item['r_price'].'</span><span class="ty_c">/ 月</span>';
            echo '</div><a class="lk_more" href="#">查看房间详情</a></div></div>';             
        }
            echo '<div class="page">';
            if($page==0 || $page==1)
            {
                echo '<a href="javascript:void(0)" page="1" class="pages on">1</a>';
            }else
            {
                echo  '<a href="javascript:void(0)" page="1" class="pages">1</a>';
            }
            
            for($i = 1;$i<=$cou-1;$i++)
            {
                $s = $i+1;
                if($s==$page)
                {
                    echo '<a href="javascript:void(0)" class="pages on" page="'.$s.'">'.$s.'</a>';
                }else
                {
                    echo '<a href="javascript:void(0)" class="pages" page="'.$s.'">'.$s.'</a>';
                }
                
            }
            echo '</div>';         
    }


    //房屋详情页面
    public function roomcon(Request $request)
    {
    	$r_id = $request->input("r_id");
    	$room = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('pattern','pattern.wid','=','house.pay')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id',"house.h_id","ways")
        ->where('r_id','=',$r_id)
        ->first();
        $img = DB::table('img')->where("h_id","=",$room['h_id'])->get();
        $privape = DB::table('rp')->where('r_id','=',$r_id)->get();
        
    	$roomd = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('pattern','pattern.wid','=','house.pay')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id',"house.h_id","ways","r_status")
        ->where('house.h_id','=',$room['h_id'])
        ->get();
        foreach($roomd as $k=>$v){
        	    $roomd[$k]['privape'] = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                
        }
        $conf = DB::table('hc')->Join('conf','conf.con_id','=','hc.con_id')->where('hc.h_id','=',$room['h_id'])->get();
        
        //猜你喜欢
        $like = DB::table('house')
        ->Join('room','room.h_id','=','house.h_id')
        ->Join('pattern','pattern.wid','=','house.pay')
        ->Join('category','house.cat_id','=','category.cat_id')
        ->Join('region','house.region_id','=','region.region_id')
        ->Join('orientation','house.direction','=','orientation.did')
        ->select('r_id','region_name','h_name','r_title','direct','r_name','r_area','cat_name','survey','floor','r_price','r_img','house.region_id','house.cat_id',"house.h_id","ways","r_status")
        ->where('region.region_name','like',"%".$room['region_name']."%")
        ->get();
        foreach($roomd as $k=>$v){
        	$like[$k]['privape'] = DB::table('rp')->where('r_id','=',$v['r_id'])->get();
                
        }
        // var_dump($like);die;
        return view('room.roomcon',["room"=>$room,"img"=>$img,"privape"=>$privape,"roomd"=>$roomd,"conf"=>$conf,"like"=>$like]);
    }
    //地图找房
        public function map()
    {
        return view('room.map');
    }
    //地图信息
    public function maptext()
    {
        $sql = DB::table('house')->Join('room','room.h_id','=','house.h_id')->get();
        //print_r($sql);die();
        foreach($sql as $k=>$v)
        {
             $map[$k][]=$v['coord'];
             $map[$k][]=$v['roord'];
             $map[$k][]='租房地址：<a href="roomcon?r_id='.$v['r_id'].'">'.$v['detail'].'</a>';
        }
        echo json_encode($map);
    }
    //我要看房
    public function user(Request $request)
    {
        $phone = $request->input('mobile');
        $rand = rand(1000,9999);//手机验证
        session(["$phone"=>"$rand"]); //存session
       
         sendTemplateSMS("$phone",array("$rand",'5'),"1");
    }
    //验证手机真实性&入库
    public function will(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('mobile');
        $messgeCode = $request->input('messgeCode');
        $code = session("$phone");
        $data['y_name'] = $name;
        $data['y_phone'] = $phone;
        $data['y_time'] = time();
        $data['y_status'] = 0;
        //判断验证
        if($code==$messgeCode)
        {
            //入库
            $res = DB::table("ycustomer")->insert($data);
            echo "1";
        }else
        {
            echo "0";
        }

    }
}