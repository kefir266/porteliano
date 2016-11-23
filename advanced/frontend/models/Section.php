<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 18.11.2016
 * Time: 16:13
 */

namespace app\models;


use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Section extends ActiveRecord
{

    private function _getTree($allElements = null) {// one level nested
        if ($allElements == null) return [];
        $tree = [];
        $references = [];
        $firstLevel = true;
        foreach ( $allElements as $id => $item ){

            $node[$id] = $item;

            $references[$node[$id]['id']] = &$node[$id];
            $node[$id]['items'] = [];//items equal children
            $node[$id]['label'] = $node[$id]['title'];
            if (is_null($node[$id]['parent_id']) || $firstLevel)
            {
                $tree[$node[$id]['id']] = &$node[$id];
                $firstLevel = false;
            }
            else
            {
                $references[$node[$id]['parent_id']]['items'][$node[$id]['id']] = &$node[$id];
            }
            $node[$id]['url'] = $node[$id]['page'];
        }

        return $tree;
    }

    public function getMenu(){

        $result = ArrayHelper::toArray(self::find()->orderBy('parent_id')->all());
        

        $tree = $this->_getTree($result);
        return $tree;
    }

    public function getSection($id) {
        
        return $this->find()->where(['id' => $id]);
        
    }
}