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

        $condition = ($id == null) ? [] : ['section_id' => $id];

        $products['products'] = $this->find()->where($condition)->each($num);

        $materials = $this->find()->
            select('material_id, material.title title')->distinct()
            ->innerJoin('material','material_id = material.id')
            ->where($condition)->each();


        foreach ($materials as $item) {
            
            $products['materials'][]  = ['label' => $item['title'], 'url' => '#'];
        }

        $styles = $this->find()->
        select('style_id, style.title title')->distinct()
            ->innerJoin('style','style_id = style.id')
            ->where($condition)->each();


        foreach ($styles as $item) {

            $products['styles'][]  = ['label' => $item['title'], 'url' => '#'];
        }

        $manufacturers = $this->find()->
        select('manufacturer_id, manufacturer.title title')->distinct()
            ->innerJoin('manufacturer','manufacturer_id = manufacturer.id')
            ->where($condition)->each();


        foreach ($manufacturers as $item) {

            $products['manufacturers'][]  = ['label' => $item['title'], 'url' => '#'];
            
        }
        
        return ArrayHelper::toArray($products);

    }

    public function getMaterials(){

        return $this->hasOne(Material::className(), ['id' => 'material_id']);
        
    }

}
