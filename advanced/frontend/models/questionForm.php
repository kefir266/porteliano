<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 21.11.2016
 * Time: 14:03
 */

namespace frontend\models;


use \yii\base\Model;

class QuestionForm extends Model
{
    public $username;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            // тут определяются правила валидации
        ];
    }
}