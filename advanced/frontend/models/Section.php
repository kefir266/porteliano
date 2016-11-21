<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 18.11.2016
 * Time: 16:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class Section extends ActiveRecord
{

    private function _getTree($allElements = null) {// one level nested
        $tree = [];
        $references = [];
        foreach ($allElements as $element ){

            $node = &$element['attributes'];
            $references[$element['id']] = &$node;
            $node['items'] = [];//items equal children
            $node['label'] = $node['title'];
            if ($node['parent_id'] == 0){
                $tree[$element['id']] = &$node;
                $node['url'] = 'site/' . $node['page'];
            }
            else
            {
                $node['url'] = 'site/' . $node['page'];
                $references[$node['parent_id']]['items'][$node['id']] = &$node;

            }
        }
        return $tree;
    }

    public function getMenu(){

        $result = self::find()->orderBy('parent_id')->all();
        $tree = $this->_getTree($result);

//        foreach ($result as $item) {
//
//            if ($item['parent_id']!=0)
//                $mItems[] = [
//                    'label' => $item['name'],
//                    'url' =>  'accounting/'.$item['model']
//                ];
//            else
//                $mItems[] = [
//                    'label' => $item['name'],
//                ];
//        }
        $menuForWidget = ['items' => $tree];
        return $menuForWidget;
    }


}