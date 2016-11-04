<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\CatModel;
use yii\db\Query;
use yii\data\Pagination;//自带分页类
class HouseController extends Controller
{
	public $layout ='public';
	public $request;
	public $db;
	public $session;
	public function init()
	{
		$this->request = Yii::$app->request;
		$this->db = Yii::$app->db;
		$this->session = Yii::$app->session;
		$this->session->open();
		parent::init();
	}
	public function actionCatShow(){	
	    $query = CatModel::find();
	    $pages = new Pagination(['totalCount' => $query->count(),'pageSize'=>2]);
	    $models = $query->offset($pages->offset)
	        ->limit($pages->limit)
	        ->all();
	    return $this->render('CatShow', [
	        'data' => $models,
	        'pages' => $pages,
	    ]);
	}
	// 添加
	public function actionCatAdd(){
		$connect = yii::$app->request;
		if($connect->isPost){
		$table = $connect->post('CatModel');		
		$res=yii::$app->db->createCommand()->insert('category',$table)->execute();
		if($res){
			$this->redirect(['house/cat-show']);
		}else{
			echo "出现了一点小bug";
		}
		}else{
		$model = new CatModel();
		return $this->render('CatAdd',['model'=>$model]);	
		}
	
	}
	// 删除
	public function actionCatDel(){
		$id=$this->request->get('id');
		if($id){
			$res=$this->db->createCommand()->delete('category',['cat_id'=>$id])->execute();
			if($res){
				//删除成功，跳转到展示页面
				$this->redirect(['house/cat-show']);
			}
		}
	}
	//改
	public function actionCatUpdate(){
		if($this->request->isPost){
		$table = $this->request->post('CatModel');
		$data=CatModel::find()->where(['cat_id'=>$table['cat_id']])->one(); 	
		$data->cat_name=$table['cat_name'];
		$data->cat_desc=$table['cat_desc'];
		$data->sort=$table['cat_name'];
		$data->is_nav=$table['is_nav'];
		$data->is_show=$table['is_show'];
		$res=$data->save();
		if($res){
			//修改成功，跳转到展示页面
			$this->redirect(['house/cat-show']);
		}
		}
		$id=$this->request->get('id');
		if($id){
			$data=CatModel::find()->where(['cat_id'=>$id])->one();
			if($data){
				$model = new CatModel();
				return $this->render('update',['data'=>$data,'model'=>$model]);
			}
		}
		
	}
	//测试用的
	public function actionIndex(){
		return $this->render('index');
	}
}