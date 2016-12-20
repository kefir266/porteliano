<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manufacturer".
 *
 * @property string $id
 * @property string $title
 * @property string $alias
 * @property integer $imageID
 * @property string $body
 * @property string $website
 * @property integer $brandID
 * @property integer $isPublished
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 *
 * @property Product[] $products
 */
class Manufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'imageID', 'body'], 'required'],
            [['imageID', 'brandID', 'isPublished'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['alias', 'website', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'alias' => 'Alias',
            'imageID' => 'Image ID',
            'body' => 'Описание',
            'website' => 'Website',
            'brandID' => 'Brand ID',
            'isPublished' => 'Is Published',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['manufacturer_id' => 'id']);
    }


}
