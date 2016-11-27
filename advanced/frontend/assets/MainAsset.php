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
        'css/stylename.css',
        'css/main.css',
        'css/block_1.css',
        'css/block_2.css',
        'css/animation.css',
		'css/block_3.css',
        'css/block_4.css',
        'css/block_5.css',
        'css/block_6.css',
        'css/block_7.css',
        'css/block_8.css',
        'css/block_9.css',
        'css/block_10.css',
        'css/block_11.css',
        'css/block_12.css',
        'css/gray.css',
    ];
    public $js = [
        // доп. библиотеки
        'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
        '/js/lib/jquery.scroolly.js',
        // скрипты
        'js/ajax-modal-popup.js',
        'js/runningRibbon.js',
        'js/fixedMenu.js',
        'js/scrollspy.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

