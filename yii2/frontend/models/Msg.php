<?php
namespace frontend\models;

use yii;
use yii\db\ActiveRecord;
class Msg extends ActiveRecord
{
	public static function tableName()
	{
		return 'msg';
	}
	
}