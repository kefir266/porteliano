<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property string $id
 * @property string $title
 * @property string $parent_id
 * @property string $title_main
 * @property string $page
 *
 * @property Product[] $products
 * @property Section $parent
 * @property Section[] $sections
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['page'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 32],
            [['title_main'], 'string', 'max' => 100],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Категория',
            'parent_id' => 'Группа',
            'title_main' => 'Название на сайте',
            'page' => 'Page',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Section::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['parent_id' => 'id']);
    }
}
