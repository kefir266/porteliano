<?php

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model frontend\models\Product */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\bootstrap;

/*  assets  */
use app\assets\AppAsset;
use app\assets\MainAsset;
use app\assets\FontAsset;
use app\assets\BackAsset;

AppAsset::register($this);
$test = MainAsset::register($this);
FontAsset::register($this);
BackAsset::register($this);

$this->title = 'home';
?>

<div id="Scrollspy" data-spy="scroll" data-target=".navbar" data-offset="10">
<?php
    require_once 'home/block_01.php';
    require_once 'home/block_02-catalog.php';
    require_once 'home/block_03-action.php';

    $currentSection = 'novelty';
    require 'home/block_06-doors.php';
    require_once 'home/block_05-key-benefits.php';

$navigation = '    <ul class="nav nav-tabs nav-pills " role="tablist">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">МЕЖКОМНАТНЫЕ</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ВХОДНЫЕ</a></li>
    </ul>';

    $currentSection = '1';
    require 'home/block_06-doors.php';
    $navigation = '';
    require_once 'home/block_07-facts.php';

    $currentSection = '2';
    require 'home/block_06-doors.php';

    require_once 'home/block_09-action2.php';
    require_once 'home/block_10-manufacturers.php';
    require_once 'home/block_11-about.php';
    require_once 'home/block_12-Contacts.php';
?>
</div>

