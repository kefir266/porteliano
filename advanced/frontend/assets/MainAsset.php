<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        
        'css/animation.css',
        'css/gray.css',        
        'css/main.css',
        
    ];
    public $js = [
        // доп. библиотеки
        'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
        '/js/lib/jquery.scroolly.js',
        // скрипты
        'js/fixedMenu.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

