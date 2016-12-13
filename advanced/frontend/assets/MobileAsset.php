<?php

namespace app\assets;
use yii\web\AssetBundle;

class MobileAsset extends AssetBundle{
	public $basePath = "@webroot";
	public $baseUrl = "@web";
	public $css = [
		'css/mobile.css'
	];
}