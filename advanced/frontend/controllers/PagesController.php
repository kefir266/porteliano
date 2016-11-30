<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:06
 */
namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\QuestionForm;
use GuzzleHttp\Psr7\Request;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

//use frontend\models\Manufacturer;


/*Для тестов*/
use app\models\EntryForm;

/**
 * Page controller
 */
class PagesController extends Controller
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

    /**
     * Displays page.
     *
     * @return mixed
     */
    public function actionDveri()
    {
        return $this->render('02_Dveri');
    }

    /**
     * @param $ind
     * @return string
     */
    public function actionDoorcatalog($ind)
    {
        $modelProduct = new Product();
        $request = Yii::$app->request;
        $products = $modelProduct->getProductsBySection($request->get('section'),3 ); /// три картинки на страницу
        
        return $this->render('03_Dveri_katalog',['products' => $products,
            'ind' => $ind,
        ]);
    }

    public function actionSepta()
    {
        return $this->render('05_Peregorodki');
    }

    public function actionManufacturers()
    {
        //TODO переделать в запрос из базы
        $manufArr = file('manuf.txt');

        return $this->render('07_Proizvoditeli', ['manufacturer' => $manufArr,]);
    }

    public function actionManufacturers_inner()
    {
        return $this->render('08_Proizvoditeli-vnutr');
    }
    public function actionAbout()
    {
        $QuestionForm = new QuestionForm();
        return $this->render('09_O kompanii',['questionForm' => $QuestionForm]);
    }
    public function actionContacts()
    {
        $QuestionForm = new QuestionForm();
        return $this->render('12_Kontakti',['questionForm' => $QuestionForm]);
    }

//тест
    public function actionAdd_manufacturers_in_db()
    {
        //$manufacturer = new Manufacturer();
        /* Добавить производителей из файла в базу
        $manufArr = file('manuf.txt');
        for ($i = 0; $i < count($manufArr); $i++) {
            $manufacturer = new Manufacturer();
            $manufacturer->title = $manufArr[$i];
            $manufacturer->save();
        }
        */
    }


}