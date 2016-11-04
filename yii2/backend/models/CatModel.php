<?php
namespace backend\models;
use yii;
use yii\db\ActiveRecord;
class CatModel extends ActiveRecord
{
	public static function tableName(){
		return "category";
	}
}

?>