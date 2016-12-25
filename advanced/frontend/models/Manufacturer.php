<?php

namespace app\models;

use Yii;
use frontend\models\GreenyImages;

/**
 * This is the model class for table "manufacturer".
 *
 * @property string $id
 * @property string $title
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
            [['title'], 'required'],
            [['title'], 'string', 'max' => 50],
            [['website'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'website' => 'Веб-сайт'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['manufacturer_id' => 'id']);
    }

    public function getManufacturersByClasses(){

        return $this->find()->where('class IS NOT NULL')->orderBy('class')->each();
    }

    public function  getLogos() {

        return $this->find()->where('class IS NOT NULL');
    }

    public  function getImage()
    {
        return $this->hasOne(GreenyImages::className(), ['imageID' => 'imageID']);
    }
}
