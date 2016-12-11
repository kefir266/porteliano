<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property string $id
 * @property string $date
 * @property string $full_name
 * @property string $done
 * @property string $term
 *
 * @property Customer $fullName
 * @property OrderContent[] $orderContents
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date'], 'required'],
            [['id'], 'integer'],
            [['date', 'done', 'term'], 'safe'],
            [['full_name'], 'string', 'max' => 100],
            [['full_name'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['full_name' => 'full_name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер заказа',
            'date' => 'Дата создания',
            'full_name' => 'Заказчик',
            'done' => 'Выполнен',
            'term' => 'Сроки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFullName()
    {
        return $this->hasOne(Customer::className(), ['full_name' => 'full_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderContents()
    {
        return $this->hasMany(OrderContent::className(), ['order_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderQuery(get_called_class());
    }

    public function getOrderContent( ) {

        return $this->hasMany(OrderContent::className(), ['order_id' => 'id']);
    }
}
