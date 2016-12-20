<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets\pages;

use yii\web\AssetBundle;


class DoorsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/pages/doors.css',
        /* сюда tablet стили*/        
        'css/pages/_mobile_pages.css', 
    ];
    public $js = [
        // доп. библиотеки        
        // скрипты
        'js/navbarSwitch.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

