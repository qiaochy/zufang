<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property integer $id
 * @property integer $h_id
 * @property string $file
 */
class UploadModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['h_id', 'file'], 'required'],
            [['h_id'], 'integer'],
            [['file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'h_id' => 'H ID',
            'file' => 'File',
        ];
    }
}
