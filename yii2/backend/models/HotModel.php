<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hot".
 *
 * @property integer $id
 * @property string $name
 * @property string $is_show
 * @property string $add_time
 * @property integer $click_num
 */
class HotModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_show', 'click_num'], 'integer'],
            [['add_time'], 'safe'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_show' => 'Is Show',
            'add_time' => 'Add Time',
            'click_num' => 'Click Num',
        ];
    }
}
