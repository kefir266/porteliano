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

AppAsset::register($this);
$test = MainAsset::register($this);
FontAsset::register($this);

$this->title = 'home';
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js"></script>

<?php
    require_once 'home/block_01.php';
    require_once 'home/block_02-catalog.php';
    require_once 'home/block_03-action.php';
    require_once 'home/block_04-novelty.php';
    require_once 'home/block_05-key-benefits.php';
    require_once 'home/block_06-doors.php';
    require_once 'home/block_07-facts.php';
    require_once 'home/block_08-septa.php';
    require_once 'home/block_09-action2.php';
    require_once 'home/block_10-manufacturers.php';
    require_once 'home/block_11-about.php';
    require_once 'home/block_12-Contacts.php';
?>    


