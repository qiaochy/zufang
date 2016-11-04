<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class LoginController extends Controller
{
	public $layout = false;
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
		return  $this->render('login');
	}
	//登录判断
	public function actionJudge()
	{
		
		$username = $this->request->post('username');//用户名
		$pwd = $this->request->post('pwd');//密码
		$res = $this->db->createCommand("select * from admin where admin_name='$username' and admin_pwd=$pwd")->queryOne();
		
		if($res)
		{
			//修改登录时间
			$time = time();
			$aid = $res['admin_id'];
			$this->db->createCommand()->update('admin',['login_time'=>$time],"admin_id=$aid")->execute();
			//存session
			$this->session['aid'] = $aid;
			$this->session['username'] = $username;
			return $this->redirect(['index/index']);
			
		}else
		{

			 \Yii::$app->getSession()->setFlash('error', '登录失败，请检查用户名密码！');
			return $this->redirect(array('login/index'));
		}
		
	}
}