<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class TestController extends Controller{
    //表单页面
    public function index(){

        return view("index");
        
    }
    //添加数据库
    public function add(Request $request){
        $data = $request->input();
        $res = DB::table('msg')->insert($data);
        if($res){
            return redirect("show");
        }else{
            return redirect("index");
        }
    }
    //数据展示
    public function show(){
        $msg = DB::table('msg')->get();
        // var_dump($msg);
        return view("show",["msg"=>$msg]);
    }
    //删除
    public function del(Request $request){
        $id = $request->input("id");
        $res = DB::table('msg')->where('id', '=', $id)->delete();
        if($res){
            return redirect("show");
        }else{
            return redirect("show");
        }
    }
    //修改页面
    public function save(Request $request){
        $id = $request->input("id");
        $data = DB::table('msg')->where('id', '=', $id)->first();
        return view("save",["data"=>$data]);
    }
    //修改数据
    public function save_data(Request $request){
        $data = $request->input();
        $res = DB::table('msg')->where('id', $data["id"])->update($data);
        if($res){
            return redirect("show");
        }else{
            return redirect("show");
        }        
    }
}