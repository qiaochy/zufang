<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $h_id
 * @property string $h_name
 * @property integer $cat_id
 * @property integer $region_id
 * @property integer $status
 * @property string $survey
 * @property string $pay
 */
class HouseModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['h_name', 'cat_id', 'region_id', 'survey', 'pay'], 'required'],
            [['cat_id', 'region_id', 'status'], 'integer'],
            [['h_name'], 'string', 'max' => 255],
            [['survey', 'pay'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'h_name' => 'H Name',
            'cat_id' => 'Cat ID',
            'region_id' => 'Region ID',
            'status' => 'Status',
            'survey' => 'Survey',
            'pay' => 'Pay',
        ];
    }
}
