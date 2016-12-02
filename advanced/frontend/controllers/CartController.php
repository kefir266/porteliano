<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.12.2016
 * Time: 11:43
 */

namespace frontend\controllers;

use app\models\Cart;
use app\models\Wish;
use yii;
use yii\base\Controller;
use frontend\models\Product;

class CartController extends Controller
{

    public function actionAdd(){

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (count($product->toArray()) > 0){

            $session = Yii::$app->session;
            $session->open();
            if (!isset($session['cart'])) {
                $session['cart'] = new Cart();
            }

            return $session['cart']->add($product);
        }

        return 'не найден '.$id;
    }

    public function actionAddwish(){

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (count($product->toArray()) > 0){

            $session = Yii::$app->session;
            $session->open();
            if (!isset($session['wish'])) {
                $session['wish'] = new Wish();
            }

            return $session['wish']->add($product);
        }

        return 'не найден '.$id;
    }
}