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
class IndexController extends Controller
{
	public $layout = false;
	//首页展示
	public function actionIndex()
	{
		return  $this->render('index');
	}

}