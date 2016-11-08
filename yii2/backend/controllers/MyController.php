<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\UploadForm;
use yii\web\UploadedFile;
use backend\models\My;

/**
 * Site controller
 */
class MyController extends Controller
{
	//public $layout = false;
	public $layout = "public"; //设置使用的布局文件


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
	//首页展示
	public function actionIndex()
	{
		$res = My::find()->asArray()->one();
		return  $this->render('my_show',['res'=>$res]);
	}
	//编辑
	public function actionUpload()
	   {
	       	$model = new UploadForm();

	       	if (Yii::$app->request->isPost)
	       	{

	           		$model->file = UploadedFile::getInstance($model, 'file');
	           		
	           	if(empty($model->file))
	           	{
	           		$data = $this->request->post();
	           		unset($data['UploadForm']);
	           		My::updateAll($data);//修改 
	           		\Yii::$app->getSession()->setFlash('success', '修改成功');
	           	}else
	           	{
	           		if ($model->validate())
	           		{            
	           		$data = $this->request->post();
	           		unset($data['UploadForm']);
	           		$name = time().rand(1000,9999).'.'.$model->file->extension;
	           		$data['img'] = 'uploads/'.$name;
	               	$model->file->saveAs('uploads/' . $name );
	               	My::updateAll($data);//修改
	               	\Yii::$app->getSession()->setFlash('success', '修改成功');
	           		}
	           	}
	           	
	        	}
	        	$res = My::find()->asArray()->one();
	       	return $this->render('my', ['model' => $model,'res'=>$res]);
	   }
	

}