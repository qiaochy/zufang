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
    public function room(){
        return view('room.room');
    }
    //房屋详情页面
    public function roomcon(){
    	return view('room.roomcon');
    }
}