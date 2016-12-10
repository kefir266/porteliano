<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_content".
 *
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $price
 * @property string $quantity
 * @property string $currency_id
 * @property string $sum
 *
 * @property Currency $currency
 * @property Customer $customer
 * @property Order $order
 * @property Product $product
 */
class OrderContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'quantity', 'currency_id'], 'integer'],
            [['price', 'sum'], 'number'],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            //[['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'currency_id' => 'Currency ID',
            'sum' => 'Sum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currency_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @inheritdoc
     * @return OrderContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderContentQuery(get_called_class());
    }
}
