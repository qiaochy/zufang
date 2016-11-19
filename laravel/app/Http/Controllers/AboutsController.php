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
        $my_cache_name = "cache/abouts.html";//缓存路径
        $my_time = 60*24*10;//过期时间
        if(file_exists($my_cache_name))
        {
                    $t = filectime($my_cache_name);//文件存在时间
                    if($t+$my_time-->time())
                    {
                        //如果没过期，输出缓存
                        echo file_get_contents($my_cache_name);
                        exit();
                    }else
                    {
                        ob_start();
                        $my = DB::table('my')->get();
                        echo  view('abouts.abouts',['my'=>$my[0]]);
                        echo "测试缓存";
                        $content = ob_get_contents();//把输出内容赋值
                        file_put_contents($my_cache_name, $content);
                        ob_end_flush();
                    }
                }else
                {
                        ob_start();
                        $my = DB::table('my')->get();
                        echo  view('abouts.abouts',['my'=>$my[0]]);
                        echo "测试缓存";
                        $content = ob_get_contents();//把输出内容赋值
                        file_put_contents($my_cache_name, $content);
                        ob_end_flush();
                }
        
    }


    //-------------------------------------联系我们--------------------------------
    public function touch()
    {
         //查询信息
        
        $my_cache_name = "cache/touch.html";//缓存路径
        $my_time = 60*24*10;//过期时间
        if(file_exists($my_cache_name))
        {
                    $t = filectime($my_cache_name);//文件存在时间
                    if($t+$my_time-->time())
                    {
                        //如果没过期，输出缓存
                        echo file_get_contents($my_cache_name);
                        exit();
                    }else
                    {
                        ob_start();
                        $my = DB::table('my')->get();
                        echo view('abouts.touch',['my'=>$my[0]]);
                        echo "测试缓存";
                        $content = ob_get_contents();//把输出内容赋值
                        file_put_contents($my_cache_name, $content);
                        ob_end_flush();
                    }
                }else
                {
                        ob_start();
                         $my = DB::table('my')->get();
                         echo view('abouts.touch',['my'=>$my[0]]);
                         echo "测试缓存";
                        $content = ob_get_contents();//把输出内容赋值
                        file_put_contents($my_cache_name, $content);
                        ob_end_flush();
                }

    }
    public function test()
    {
        $my_cache_name = "cache/abouts.html";//缓存路径
        $my_time = 60*24*10;//过期时间
        if(file_exists($my_cache_name))
        {
            $t = filectime($my_cache_name);//文件存在时间
            if($t+$my_time-->time())
            {
                //如果没过期，输出缓存
                echo file_get_contents($my_cache_name);
                exit();
            }else
            {
                ob_start();
                $my = DB::table('my')->get();
                echo  view('abouts.abouts',['my'=>$my[0]]);
                echo "测试缓存";
                $content = ob_get_contents();//把输出内容赋值
                file_put_contents($my_cache_name, $content);
                ob_end_flush();
            }
        }else
        {
                ob_start();
                $my = DB::table('my')->get();
                echo  view('abouts.abouts',['my'=>$my[0]]);
                echo "测试缓存";
                $content = ob_get_contents();//把输出内容赋值
                file_put_contents($my_cache_name, $content);
                ob_end_flush();
        }
    }
}