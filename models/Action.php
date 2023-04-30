<?php

namespace app\models;

use Faker\Provider\Medical;
use Yii;

/**
 * This is the model class for table "action".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $action
 * @property int $medicine_id
 * @property float $medicine_price
 * @property float $total_payment
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'action', 'medicine_id', 'medicine_price', 'total_payment'], 'required'],
            [['patient_id', 'medicine_id'], 'integer'],
            [['action'], 'string'],
            [['medicine_price', 'total_payment'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'action' => 'Action',
            'medicine_id' => 'Medicine ID',
            'medicine_price' => 'Medicine Price',
            'total_payment' => 'Total Payment',
        ];
    }

    public function getPatientname()
    {
        return $this->hasOne(Patient::class, ['id' => 'patient_id']);
    }

    public function getMedicinename()
    {
        return $this->hasOne(Medicine::class, ['id' => 'medicine_id']);
    }

    public function getMedicineprice($id)
    {
    $medicineName = Medicine::findOne($id);

    return $medicineName->medicine_price;
    }
}