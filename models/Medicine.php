<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicine".
 *
 * @property int $id
 * @property string $medicine_name
 * @property string $medicine_detail
 * @property float $medicine_price
 */
class Medicine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medicine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medicine_name', 'medicine_detail', 'medicine_price'], 'required'],
            [['medicine_price'], 'number'],
            [['medicine_name', 'medicine_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medicine_name' => 'Medicine Name',
            'medicine_detail' => 'Medicine Detail',
            'medicine_price' => 'Medicine Price',
        ];
    }
}
