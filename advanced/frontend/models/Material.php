<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 21.11.2016
 * Time: 14:03
 */

namespace app\models;


use frontend\models\Product;
use yii\db\ActiveRecord;

class Material extends ActiveRecord
{
    public function getProducts(){

        return $this->hasMany(Product::className(), [ 'id'  =>  'product_id']);

    }
}