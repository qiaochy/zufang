<?php
namespace backend\models;
use yii;
use yii\db\ActiveRecord;
class My extends ActiveRecord
{
	public static function tableName(){
		return "my";
	}
	//规则
	public function rules()
	{
		return [
		[['title','content','img','status'],'required']
		];
	}
	//入库
	public function add($data)
	{
		$this->setAttributes($data);
        		$this->isNewRecord = true;
        		$this->save();
        		return $this->id;
	}
	
}

?>