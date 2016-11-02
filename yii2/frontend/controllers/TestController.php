<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\db\Query;
use yii\data\Pagination;  

/**
 * UsersController implements the CRUD actions for Users model.
 */
class TestController extends Controller
{
	public function actionIndex(){
		$request = Yii::$app->request->post();
		$db = Yii::$app->db;
		if($request){
			// 处理数据
			unset($request['_csrf']);
			// var_dump($request);
			// 入库
			$res=$db->createCommand()->insert('msg', $request)->execute();
		}else{
			return $this->render("index");
		}
		
	}
}