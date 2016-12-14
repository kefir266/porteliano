<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "greeny_images".
 *
 * @property integer $imageID
 * @property string $src
 * @property string $srcSmall
 * @property string $srcBig
 *
 * @property Product[] $products
 */
class GreenyImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'greeny_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageID', 'src'], 'required'],
            [['imageID'], 'integer'],
            [['src', 'srcSmall', 'srcBig'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imageID' => 'Image ID',
            'src' => 'Src',
            'srcSmall' => 'Src Small',
            'srcBig' => 'Src Big',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['productImageID' => 'imageID']);
    }
}
