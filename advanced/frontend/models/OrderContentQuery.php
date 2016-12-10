<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OrderContent]].
 *
 * @see OrderContent
 */
class OrderContentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OrderContent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OrderContent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
