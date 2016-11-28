<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 21.11.2016
 * Time: 12:51
 */

namespace frontend\models;

use app\models\Material;
use app\models\Section;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;


class Product extends ActiveRecord
{
    
    public function getProductsBySection($id = null, $num = null)
    {

        //TODO нужно сделать условие и для категорий родителей

//        $sectionID[] = $id;

        $products['section'] = Section::findOne(['id' => $id]);
//        if ($products['section']['parent_id'] != null)
//            $sectionID[] = $products['section']['parent_id'];
//        else
//            $sectionID[] = '0';

        $condition = ($id == null) ? []
            : 'product.section_id = '.$id.' OR section.parent_id = '.$id ;


        $products['products'] = $this->find()
            ->innerJoin('section', 'product.section_id = section.id')
            ->where($condition)->each($num);

        $materials = $this->find()->
            select('material_id id, material.title title')->distinct()
            ->innerJoin('section', 'product.section_id = section.id')
            ->innerJoin('material','material_id = material.id')
            ->where($condition)->each();

        $products['materials'] = [];
        foreach ($materials as $item) {

            $products['materials'][]  = ['label' => $item['title'], 'url' => '#',
                'linkOptions'=> ['data-toggle' =>'dropdown',
                    'id-item=' => $item['id'],
                    'table' => 'material',
                ],
            ];
        }

        $styles = $this->find()->
        select('style_id id, style.title title')->distinct()
            ->innerJoin('section', 'product.section_id = section.id')
            ->innerJoin('style','style_id = style.id')
            ->where($condition)->each();

        $products['styles'] = [];
        foreach ($styles as $item) {

            $products['styles'][]  = ['label' => $item['title'], 'url' => '#',
                'linkOptions'=> ['data-toggle' =>'dropdown',
                'id-item=' => $item['id'],
                    'table' => 'style',],];
        }

        $manufacturers = $this->find()->
        select('manufacturer_id id, manufacturer.title title')->distinct()
            ->innerJoin('section', 'product.section_id = section.id')
            ->innerJoin('manufacturer','manufacturer_id = manufacturer.id')
            ->where($condition)->each();

        $products['manufacturers'] = [];
        foreach ($manufacturers as $item) {

            $products['manufacturers'][]  = ['label' => $item['title'], 'url' => '#',
                'linkOptions'=> ['data-toggle' =>'dropdown',
                    'id-item' => $item['id'],
                    'table' => 'manufacturer',],];
        }
        
        return ArrayHelper::toArray($products);

    }

    public function getMaterials(){

        return $this->hasOne(Material::className(), ['id' => 'material_id']);
        
    }

    public function getSection(){

        return $this->hasOne(Section::className(), ['id' => 'section_id']);

    }

    public function getNewProducts($quantity){

        return [];
    }

    public function getFilteredProducts($params, $quantity){

        var_dump($params);

        return [];
    }

}
