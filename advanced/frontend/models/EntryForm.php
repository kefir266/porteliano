<?php
/**
 * Created by PhpStorm.
 * User: Hitch
 * Date: 10.11.2016
 * Time: 15:56
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}