<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\db\Query;
use yii\data\Pagination;
use frontend\models\Msg;

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
	//显示页面(胡仔)
	public function actionShow()
	{

		 $data = Msg::find();
		
       		 $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
       		 $model = $data->offset($pages->offset)->limit($pages->limit)->all();
       
       		return $this->render('show',[
             		'model' => $model,
             		'pages' => $pages,
       		]);
		
	}
	//删除 bobo
	public function actionDel(){
		$id = Yii::$app->request->get('id');
		$db = Yii::$app->db;
		$res=$db->createCommand()->delete('msg',['id'=>$id])->execute();
		$this->redirect(['test/show']);
	}
}