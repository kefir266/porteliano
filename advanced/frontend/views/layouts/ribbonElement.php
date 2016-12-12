<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.12.2016
 * Time: 12:02
 */
/** @var frontend\models\Product $products */
use yii\helpers\Html;
use yii\helpers\Url;


?>

<?php
    echo Html::beginTag('div', ['class' => 'tile']);

    echo Html::a(

        Html::img('/img/products/' . $product->manufacturer->title . '/'
        . $product->img,
        ['alt' => $product->title, 'class' => 'tile-img']), '/catalog/product/?id='. $product->id);

    //заполняется карточка
    echo Html::beginTag('div', ['class' => 'info']);
    echo Html::tag('p', $product->section->title);
    echo Html::tag('p', $product->manufacturer->title);
    echo Html::tag('p', $product->title);
    echo Html::tag('div', '', ['class' => 'delimiter']);
    echo Html::beginTag('div', ['class' => 'block-4-price']);
    $price = $product->prices;
    echo
    Html::tag('div',
        Html::tag('a', '€ '
            . ((count($price) > 0) ?
                current($price)->cost
                : ''), ['href' =>
            Url::to(['cart/add', 'id' => $product->id])]),
        ['class' => 'block-price-count add-to-cart',
            'data-id' => $product->id]
    );
    echo Html::tag('a',
        Html::tag('div', '', [
            'class' => 'glyphicon glyphicon-heart-empty add-to-wish ',
            'data-id' => $product->id]),
        ['href' =>
            Url::to(['cart/addWish', 'id' => $product->id])]);
    echo Html::endTag('div');
    echo Html::endTag('div');
    echo Html::endTag('div');

?>
