<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'order_id',
            'product_id',
            'price',
            'quantity',
            // 'currency_id',
            // 'sum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
