<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 14.12.2016
 * Time: 10:56
 */
namespace frontend\widgets\menu;
use yii\bootstrap\BootstrapPluginAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use Yii;



class PortNavBar extends NavBar
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $tag = ArrayHelper::remove($this->containerOptions, 'tag', 'div');
        echo Html::endTag($tag);
        if ($this->renderInnerContainer) {
            echo Html::endTag('div');
        }
        $tag = ArrayHelper::remove($this->options, 'tag', 'nav');
        echo Html::endTag($tag);
        BootstrapPluginAsset::register($this->getView());
    }

}