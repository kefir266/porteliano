<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 21.11.2016
 * Time: 14:03
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class questionForm extends ActiveRecord
{
    public $username;
    public $email;
}