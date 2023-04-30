<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property int $id_number
 * @property string $employee_name
 * @property string|null $address
 * @property string|null $gender
 * @property string $username
 * @property string $password
 * @property string $access
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
            [['id', 'id_number', 'employee_name', 'username', 'password', 'access'], 'required'],
            [['id', 'id_number'], 'integer'],
            [['employee_name', 'address', 'gender', 'username', 'password', 'access'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_number' => 'Id Number',
            'employee_name' => 'Employee Name',
            'address' => 'Address',
            'gender' => 'Gender',
            'username' => 'Username',
            'password' => 'Password',
            'access' => 'Access',
        ];
    }
}
