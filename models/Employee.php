<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property int $number_id
 * @property string $employee_name
 * @property string $address
 * @property string $gender
 * @property string $username
 * @property string $password
 * @property int $access_id
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_id', 'employee_name', 'address', 'gender', 'username', 'password', 'access_id'], 'required'],
            [['number_id', 'access_id'], 'integer'],
            [['gender'], 'string'],
            [['employee_name', 'address', 'username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number_id' => 'Number ID',
            'employee_name' => 'Employee Name',
            'address' => 'Address',
            'gender' => 'Gender',
            'username' => 'Username',
            'password' => 'Password',
            'access_id' => 'Access ID',
        ];
    }

    public function getAccessname()
    {
        return $this->hasOne(UserAccess::class, ['id' => 'access_id']);
    }
}
