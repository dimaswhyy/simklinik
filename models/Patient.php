<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $id
 * @property string $patient_name
 * @property string $gender
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $phone_number
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_name', 'gender', 'address', 'city', 'province', 'phone_number'], 'required'],
            [['gender'], 'string'],
            [['patient_name', 'address', 'city', 'province'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_name' => 'Patient Name',
            'gender' => 'Gender',
            'address' => 'Address',
            'city' => 'City',
            'province' => 'Province',
            'phone_number' => 'Phone Number',
        ];
    }
}
