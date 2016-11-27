<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class SeptaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/pages/septa.css',        
    ];
    public $js = [
        // доп. библиотеки
        
        // скрипты

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

