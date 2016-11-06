<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\data\Pagination;//自带分页类
use yii\db\Query;

/**
 * Index controller
 */
class YcustController extends Controller
{
	public $layout ='public';
	public $request;
	public $db;
	public $session;
	//展示客户列表
	public function actionIndex(){
		$query=new Query();
	    $arr=$query->select('*')->from('ycustomer')->all();
	    $count=count($arr);
	    $pagination = new Pagination(['totalCount' => $count]);
	    $pagination->setPageSize(10);
	    $ycustomer = $query->offset($pagination->offset)->limit($pagination->limit)->all();
	    return $this->render('index', ['ycustomer' => $ycustomer, 'pagination' => $pagination,]); 
	}



	//删除
	public function actionDel(){
		$id = Yii::$app->request->get("id");
		$res = Yii::$app->db->createCommand()->delete('ycustomer', 'y_id = '.$id)->execute();
		if($res){
				Yii::$app->session->setFlash('success', '删除成功');
				$this->redirect(['ycust/index']);
								
		}else{
				Yii::$app->session->setFlash('error', '删除失败');
				$this->redirect(['ycust/index']);
								
		}
		
	}
	//编辑
	public function actionSave(){
		$id = Yii::$app->request->get("id");
		$data = Yii::$app->request->post();
		$data["s_time"] = time();
		//编辑页面
		if($id){
			$one = Yii::$app->db->createCommand('SELECT * FROM ycustomer WHERE y_id='.$id)->queryOne();  
			return $this->render("save",['one'=>$one]);
		}
		
		//处理数据
		if($data){
			$res = Yii::$app->db->createCommand()->update('ycustomer', $data, 'y_id = '.$data['y_id'])->execute();
			if($res){
				Yii::$app->session->setFlash('success', '修改成功');
				$this->redirect(['ycust/index']);
			}else{
				Yii::$app->session->setFlash('error', '修改失败');
				$this->redirect(['ycust/index']);
			}			
		}
	}
}