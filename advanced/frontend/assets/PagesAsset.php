<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class PagesAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/pages/doors.css',
        'css/pages/septa.css',
        'css/pages/manuf.css',
        'css/pages/manuf-inner.css',
        'css/pages/about.css',
        'css/main/block_3.css',
    ];
    public $js = [
        // доп. библиотеки
        
        // скрипты
        'js/parallax.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

