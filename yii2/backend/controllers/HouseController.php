<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\CatModel;
use yii\db\Query;
use yii\data\Pagination;//自带分页类
use backend\models\HouseModel;
use backend\models\FileModel;//自建多文件上传model
use backend\models\UploadForm;//实例model
use yii\web\UploadedFile;  
use yii\db\session;
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
	//展示
	public function actionCatShow(){	
	    $data = CatModel::find();
	    $pages = new Pagination(['totalCount' => $data->count(),'pageSize'=>2]);
	    $models = $data->offset($pages->offset)
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
				return $this->render('CatUpdate',['data'=>$data,'model'=>$model]);
			}
		}
		
	}
	//  完善房间信息 &多文件上传
	  public function actionUpmore(){  
	        $model = new UploadForm();  
	        if (Yii::$app->request->isPost) {  
	          //先入房屋
	            $data=Yii::$app->request->post();
	            if(is_array($data)){
	            	unset($data['UploadForm']);
	            	unset($data['submit-button']);
	            }
	            $res=yii::$app->db->createCommand()->insert('house',$data)->execute();
		if($res){
			$h_id =Yii::$app->db->getLastInsertID();
			$session = Yii::$app->session;
			$session['h_id']=$h_id;
			}
		$file = UploadedFile::getInstances($model, 'file');  
	          	// var_dump($file);
	             if($file && $model->validate()) {  
	             echo "<pre/>";  
	             foreach ($file as $fl) {  
	             $file ='uploads/' .mt_rand(1100,9900) .time() .$fl->baseName. '.' . $fl->extension;
	             $fl->saveAs('uploads/' .mt_rand(1100,9900) .time() .$fl->baseName. '.' . $fl->extension); 
	             $res=yii::$app->db->createCommand()->insert('img',['h_id'=>$h_id,'file'=>$file])->execute();
	            }   
	        }  
	        	$this->redirect(['house/continue']);
	    }
	        $query = new Query();
		$cat = $query->select('*')->from('category')->All();
		//地区
		$region = $query->select('*')->from('region')->andWhere(['parent_id'=>1])->All();
		// 支付方式
		$pattern = yii::$app->db->createCommand('select * from pattern ')->queryAll();
		// var_dump($pattern);die;
		//朝向
		$orientation = yii::$app->db->createCommand('select * from orientation')->queryAll();	
		return $this->render('upmore',['model'=>$model,'cat'=>$cat,'region'=>$region,'pattern'=>$pattern,'orientation'=>$orientation]);	
	}
	// 继续完善房间信息
	public function actionContinue(){
		return  $this->render('continue');
	}
	//如房间表
	public function actionDoRoom(){
		 if(Yii::$app->request->post()){
		 $data=Yii::$app->request->post();
		 $session = Yii::$app->session;
		 $h_id=$session['h_id'];
		 $filename =array_pop($data);
		 
		echo "<pre/>";
		var_dump($data);
	}
}

}