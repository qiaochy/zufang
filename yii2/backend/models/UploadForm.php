<?php  
/** 
 * Created by PhpStorm. 
 * User: Administrator 
 * Date: 2015/2/13 
 * Time: 10:39 
 */  
  
namespace backend\models;  
use Yii;  
use yii\base\Model;  
  
class UploadForm extends Model  
{  
    /** 
     * @var UploadedFile|Null file attribute 
     */  
    public $file;  
  
    /** 
     * @return array the validation rules. 
     */  
    public function rules()  
    {  
        return [  
            [['file'], 'file', 'maxFiles' => 10,'extensions'=>'jpg,png,gif'],  
        ];  
    }  
  
    public function attributeLabels(){  
        return [  
            'file'=>'多文件上传'  
        ];  
    }  
}  

