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
    public $payment_number = null;
    // ...

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                // Generate new nomor_transaksi
                $lastTransaksi = self::find()->orderBy(['id' => SORT_DESC])->one();
                if ($lastTransaksi) {
                    $lastNomor = substr($lastTransaksi->payment_number, 2);
                    $newNomor = 'TP' . sprintf("%05d", $lastNomor + 1);
                } else {
                    $newNomor = 'TP' . '00001';
                }
                $this->payment_number = $newNomor;
            }
            return true;
        } else {
            return false;
        }
    }
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
            [['action_id', 'payment_date', 'total_payment'], 'required'],
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

    public function getAction()
    {
        return $this->hasOne(Action::class, ['id' => 'action_id']);
    }
}
