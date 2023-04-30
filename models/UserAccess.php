<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userAccess".
 *
 * @property int $id
 * @property string $access_name
 */
class UserAccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userAccess'; 
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_name', 'access_code'], 'required'],
            [['access_name', 'access_code'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'access_name' => 'Nama Akses',
            'access_code' => 'Kode Akses',
        ];
    }
}
