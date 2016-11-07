<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property integer $id
 * @property integer $h_id
 * @property string $img
 */
class FileModel extends \yii\db\ActiveRecord
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
            [['h_id', 'img'], 'required'],
            [['h_id'], 'integer'],
            [['img'], 'string', 'max' => 50],
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
            'img' => 'Img',
        ];
    }
}
