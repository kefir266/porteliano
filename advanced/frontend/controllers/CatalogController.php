<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 28.11.2016
 * Time: 13:00
 */

namespace frontend\controllers;

use Yii;

use frontend\models\Product;

use yii\helpers\ArrayHelper;
use yii\web\Controller;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class CatalogController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){

        $modelProduct = new Product();
        $request = Yii::$app->request;
        $quantity = 20;

        $params = $request->get();

        $products = $modelProduct->getFilteredProducts($params, $quantity);

        return $this->render('03_Dveri_katalog',[
            'products' => $products,
            'params' => $params,]
            );
    }
    
    public function actionProduct() {

        $id = Yii::$app->request->get('id');
        
        $product = Product::findOne($id);
        return $this->render('04_Dveri_Kartochka-tovara', ['product' => $product]);
    }

}