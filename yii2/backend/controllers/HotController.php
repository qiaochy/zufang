<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller; 
use yii\db\session;
use backend\models\HotModel;
use yii\db\query;
use yii\data\Pagination;//自带分页类
class HotController extends Controller
{
	public $layout ='public';
	public $db;
	public $query;
	public $session;
	public $request;
	public function init(){
		$this->query = new Query();
		$this->request=yii::$app->request;
		$this->db=yii::$app->db;
		$this->session =yii::$app->session;
		parent::init();
	}
	//热词展示
	public function actionIndex(){	
	    $data = HotModel::find();
	    $pages = new Pagination(['totalCount' => $data->count(),'pageSize'=>3]);
	    $models = $data->offset($pages->offset)
	        ->limit($pages->limit)
	        ->all();
	    return $this->render('index', [
	        'data' => $models,
	        'pages' => $pages,
	    ]);
	}
	//热词添加
	public function actionAdd(){
		if($this->request->isPost){
			//接值入库
			$info=$this->request->post('HotModel');
			$data['name']=$info['name'];
			$data['is_show']=1;
			$data['add_time']=date('y-m-d');
			$data['click_num']=0;
			$res=$this->db->createCommand()->insert('hot',$data)->execute();
			if($res){
				echo "入库成功";
			}

		}else{
			$model = new HotModel();
		return $this->render('add',['model'=>$model]);
		}
		
	}
}