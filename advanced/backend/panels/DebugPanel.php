<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 26.11.2016
 * Time: 17:07
 */

namespace app\panels;


use app\models\Product;

use yii\base\Event;
use yii\debug\Panel;

class DebugPanel extends Panel
{
    private $_colector;


    public function init()
    {
        parent::init();
        Event::on(Product::className(),Product::EVENT_AFTER_FIND,
            function($event){$this->_colector[] = $event;});
    }

    public  function getName()
    {
        return 'My debug';
    }

    public function getSummary()
    {
        return parent::getSummary();
    }

    public function getDetail()
    {
        return parent::getDetail();
    }

    public function save()
    {
        return $this->_colector;
    }
}