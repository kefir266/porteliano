<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 21.11.2016
 * Time: 12:51
 */

namespace frontend\models;

use app\models\Material;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;


class Product extends ActiveRecord
{
    
    public function getProductsBySection($id = null, $num = null)
    {

        //TODO нужно сделать условие и для категорий родителей
        if ($id == null) {
            $products['products'] = $this->find()->each($num);
        } else {
            $products['products'] = $this->find()->where(['section_id' => $id])->each($num);
        }

        $materials = $this->hasOne(Material::className(), ['material_id' => 'id'])
//                    ->where(['section_id' => $id])
            ->each();
        foreach ($materials as $material) {
            var_dump(material);
            $products['materials'] [] = ['label' => $material['title']];
        }
        var_dump($products['materials']);
        //TODO нужно еще присоединить стили и производители для данной категории
        
        return ArrayHelper::toArray($products);

    }

    public function getMaterials(){

        return $this->hasOne(Material::className(), ['id' => 'material_id']);
        
    }

}
