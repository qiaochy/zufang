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
class CustController extends Controller
{
	public $layout ='public';
	public $request;
	public $db;
	public $session;
	//展示客户列表
	public function actionIndex(){
		// $customer = Yii::$app->db->createCommand('SELECT * FROM customer')->queryAll();  
		// return $this->render('index',["customer"=>$customer]);
		$query=new Query();
	    $arr=$query->select('*')->from('customer')->all();
	    $count=count($arr);
	    $pagination = new Pagination(['totalCount' => $count]);
	    $pagination->setPageSize(10);
	    $customer = $query->offset($pagination->offset)->limit($pagination->limit)->all();
	    return $this->render('index', ['customer' => $customer, 'pagination' => $pagination,]); 
	}

	//客户列表完善
	public function actionAdd(){
		$request = $request = Yii::$app->request->post();
		if($request){
			// var_dump($request);
			$res = Yii::$app->db->createCommand()->insert('customer', $request)->execute();
			if(!$res){
				 Yii::$app->getSession()->setFlash('error', '<script>alert("添加失败");</script>');
								
			}else{
				 Yii::$app->getSession()->setFlash('success', '<script>alert("添加成功");</script>');
								
			}			
		}
			// return $this->redirect(array('cust/add'));
			return $this->render('add');
	}

	//删除
	public function actionDel(){
		$id = Yii::$app->request->get("id");
		$res = Yii::$app->db->createCommand()->delete('customer', 'cust_id = '.$id)->execute();
		if($res){
				Yii::$app->session->setFlash('success', '删除成功');
				$this->redirect(['cust/index']);
								
		}else{
				Yii::$app->session->setFlash('error', '删除失败');
				$this->redirect(['cust/index']);
								
		}
		
	}
	//编辑
	public function actionSave(){
		$id = Yii::$app->request->get("id");
		$data = Yii::$app->request->post();
		//编辑页面
		if($id){
			$one = Yii::$app->db->createCommand('SELECT * FROM customer WHERE cust_id='.$id)->queryOne();  
			return $this->render("save",['one'=>$one]);
		}
		
		//处理数据
		if($data){
			$res = Yii::$app->db->createCommand()->update('customer', $data, 'cust_id = '.$data['cust_id'])->execute();
			if($res){
				Yii::$app->session->setFlash('success', '修改成功');
				$this->redirect(['cust/index']);
			}else{
				Yii::$app->session->setFlash('error', '修改失败');
				$this->redirect(['cust/index']);
			}			
		}
	}
}