<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\CatModel;
use yii\db\Query;
use yii\data\Pagination;//自带分页类
use backend\models\HouseModel;
use backend\models\FileModel;//自建多文件上传model
use backend\models\UploadModel;//实例model
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
	    $pages = new Pagination(['totalCount' => $data->count(),'pageSize'=>3]);
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
	        $model = new UploadModel();  
	        if (Yii::$app->request->isPost) {  
	          //先入房屋
	            $data=Yii::$app->request->post();
	            echo "<pre/>";
	            // var_dump($data);die;
	            $arr=$data['con_id'];
	            unset($data['con_id']);
	            // print_r($arr);
	            // print_r($data);exit;
	            if(is_array($data)){
	            	$cat_id=$data['cat_id'];
	            	unset($data['UploadModel']);
	            	unset($data['submit-button']);
	            }
	            $res=yii::$app->db->createCommand()->insert('house',$data)->execute();
		if($res){
			$h_id =Yii::$app->db->getLastInsertID();
			$session = Yii::$app->session;
			$session['h_id']=$h_id;
			//入公共配置表
			foreach ($arr as $v) {
	            	  	$str=yii::$app->db->createCommand()->insert('hc',['h_id'=>$h_id,'con_id'=>$v])->execute();
	          		 }
		}
		$file = UploadedFile::getInstances($model, 'file');  
	          	// var_dump($file);die;
	             if($file) {  
	             echo "<pre/>";  
	             foreach ($file as $fl) {  
	             $file ='uploads/' .mt_rand(1100,9900) .time() .$fl->baseName. '.' . $fl->extension;
	             $fl->saveAs('uploads/' .mt_rand(1100,9900) .time() .$fl->baseName. '.' . $fl->extension); 
	             $res=yii::$app->db->createCommand()->insert('img',['h_id'=>$h_id,'file'=>$file])->execute();
	            }   
	        }  
	        // 入房间表  默认值都是0
	        	if($cat_id>1){
	        		// echo $cat_id;
	        		$arr=['A室','B室','C室','D室','E室','F室','G室','H室','I室','J室'];
	        		$room = array_slice($arr,0,$cat_id);
	        		// var_dump($room);die;
	        		foreach ($room as  $v) {
	        		 $res=yii::$app->db->createCommand()->insert('room',[
		 	'r_name'=>$v,
		 	'h_id'=>$h_id,
		 	'r_area'=>0,
		 	'r_price'=>0,
		 	'r_status'=>0,
		 	'r_img'=>0,
		 	'complete'=>0,
		 	])->execute();
        		}
	        		$this->redirect(['house/complete']);
	        	}else{
	        		echo "信息完善成功";
	        	}
	        
	    }
	             $query = new Query();
	             //公共配置
	             $conf = yii::$app->db->createCommand('select * from conf ')->queryAll();
	             // 分类
		$cat = $query->select('*')->from('category')->All();
		//地区
		$region = $query->select('*')->from('region')->andWhere(['parent_id'=>1])->All();
		// 支付方式
		$pattern = yii::$app->db->createCommand('select * from pattern ')->queryAll();
		// var_dump($pattern);die;
		//朝向
		$orientation = yii::$app->db->createCommand('select * from orientation')->queryAll();	
		return $this->render('upmore',['model'=>$model,'cat'=>$cat,'region'=>$region,'pattern'=>$pattern,'orientation'=>$orientation,'conf'=>$conf]);	
	}
	// 继续完善房间信息
	public function actionContinue(){
		 if(Yii::$app->request->post()){
		 $data=Yii::$app->request->post();
		 $arr=$data['p_id'];
	           	 unset($data['p_id']);
	           	 // var_dump($arr);die;
		 $session = Yii::$app->session;
		 $h_id=$session['h_id'];
		 // echo $h_id;die;
		 $filename =array_pop($data);
		 $r_img ='uploads/' .mt_rand(1100,9900) .time() .$filename;
		// echo $r_img;
		 move_uploaded_file($filename,  $r_img);
		 $res=yii::$app->db->createCommand()->update('room',[
		 	'r_title'=>$data['r_title'],
		 	'r_area'=>$data['r_area'],
		 	'r_price'=>$data['r_price'],
		 	'r_status'=>$data['r_status'],
		 	'r_img'=>$r_img,
		 	'complete'=>1,
		 	],['h_id'=>$h_id,'r_name'=>$data['r_name']])->execute();
		}
		$room=yii::$app->db->createCommand("select r_id from room where h_id=$h_id and r_name='$data[r_name]'")->queryAll();
		// var_dump($room);die;
		//入库房间私有配置表
			foreach ($arr as $v) {
	            	  	$str=yii::$app->db->createCommand()->insert('rp',['r_id'=>$room[0]['r_id'],'p_id'=>$v])->execute();
	          		 }
	          		 if($res||$str){
			$this->redirect(['house/complete']);
		}
	}
	//逐一完善各房间
	public function actionComplete(){
		 $session = Yii::$app->session;
		 $h_id=$session['h_id'];
		$conf = yii::$app->db->createCommand('select * from private_conf ')->queryAll();
		$room = yii::$app->db->createCommand("select * from room where h_id=$h_id and complete = 0")->queryAll();
		// print_r($room);die;
		if(!empty($room)){
		return $this->render('continue',['room'=>$room,'conf'=>$conf]);	
		}else{
			echo "complete";
		}
		
}

}