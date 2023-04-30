<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int $action_id
 * @property int $payment_number
 * @property string $payment_date
 * @property float $total_payment
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action_id', 'payment_number', 'payment_date', 'total_payment'], 'required'],
            [['action_id', 'payment_number'], 'integer'],
            [['payment_date'], 'safe'],
            [['total_payment'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'action_id' => 'Action ID',
            'payment_number' => 'Payment Number',
            'payment_date' => 'Payment Date',
            'total_payment' => 'Total Payment',
        ];
    }
}
