<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\data\Pagination;//自带分页类
use yii\db\Query;
use yii\web\UploadedFile;
use app\models\UploadForm;
class AdController extends Controller
{
	public $layout ='public';
	//广告展示
	public function actionIndex(){
		    $request = Yii::$app->request;
		    $query=new Query();
		    $arr=$query->from('ad')->all();
		    $count=count($arr);
		    $pagination = new Pagination(['totalCount' => $count]);
		    $pagination->setPageSize(5);
		    $ad = $query->offset($pagination->offset)->limit($pagination->limit)->all();
		    return $this->render('index', ['ad' => $ad, 'pagination' => $pagination,]); 
	}
	//广告添加
	public function actionAdd(){

		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post();
			// var_dump($data);die;
			$upload=new UploadedFile(); //实例化上传类
			$name=$upload->getInstanceByName('ad_img'); //获取文件原名称
			$str = substr($name,strrpos($name,"."));//截取文件后缀
			// var_dump($str);die;
			$filename = time().rand(100,999).$str;//重命名
			$img=$_FILES['ad_img']; //获取上传文件参数
			$upload->tempName=$img['tmp_name']; //设置上传的文件的临时名称
			$img_path='uploads/'.$filename; //设置上传文件的路径名称(这里的数据进行入库)
			$arr=$upload->saveAs($img_path); //保存文件
			$data["ad_img"]=$img_path;
			// var_dump($data);die;
			$res = Yii::$app->db->createCommand()->insert('ad', $data)->execute();
			if($res){
				Yii::$app->getSession()->setFlash('success', '添加成功');
			}else{
				Yii::$app->getSession()->setFlash('error', '添加失败');
			}
		}

		return $this->render("add");
		
	}
	//删除
	public function actionDel(){
		$id = Yii::$app->request->get("id");
		$res = Yii::$app->db->createCommand()->delete('ad', 'ad_id = '.$id)->execute();
		if($res){
			// Yii::$app->getSession()->setFlash('success', '删除成功');
			return 1;
		}else{
			// Yii::$app->getSession()->setFlash('error', '删除失败');
			return 0;
		}
		// $this->redirect(['ad/index']);	
	}
}