<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $id
 * @property string $email
 * @property string $full_name
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $reg_date
 * @property string $ip
 *
 * @property Order[] $orders
 * @property OrderContent[] $orderContents
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', ], 'required'],
            [['reg_date'], 'safe'],
            [['email', 'full_name', 'name', 'surname', 'phone'], 'string', 'max' => 100],
            [['ip'], 'string', 'max' => 15],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'full_name' => 'Full Name',
            'name' => 'Name',
            'surname' => 'Surname',
            'phone' => 'Phone',
            'reg_date' => 'Reg Date',
            'ip' => 'Ip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['full_name' => 'full_name']);
    }

}
