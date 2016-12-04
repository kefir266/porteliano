<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer \frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\bootstrap\Collapse;
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\PagesAsset;

PagesAsset::register($this);
Yii::setAlias('@img', '@web/img/');
Yii::setAlias('@imgBigLogos', '@web/img/catalog/logos/big');
// в хлебные крошки 2 ссылки
$this->params['breadcrumbs'][] = [
    'label' => 'О компании',
    'url' => Url::to(['pages/about']),
    'template' => "<li><ins>{link}</ins></li>\n", // template for this link only
];

$this->params['breadcrumbs'][] = [
    'label' => 'Доставка',
    'url' => Url::to(['pages/about_dostavka']),
    'template' => "<li> {link} </li>\n", // template for this link only

];

// для заолнения таблиц в metering
function TypesJobs($arr)
{
    /** @var array $arr */
    $str = '';
    for ($i = 0; $i < count($arr[0]); $i++) {
        $str .= '<tr>';
        for ($j = 0; $j < 3; $j++) {
            $str .= "<td>".$arr[$j][$i]."</td>";
        }
        $str .= '</tr>';
    }
    return $str;
}
$jobsMetalDoors = [
    [
        'Монтаж/замена панели при установке входной двери',
        'Демонтаж старой панели',
        'Монтаж/замена панели',
        'Монтаж/замена панели на дверь клиента (куплен не в «А.И.»)',
        'Замена блока MIA/личинки — Dierre, Nucleo — Torterolo',
        'Установка одностворчатой металлической двери (в готовый проем)',
        'Установка двустворчатой металлической двери (в готовый проем)',
        'Установка всей серии Pininfarina, все двери со стеклом',
    ],
    [
        '-',
        '-',
        '-',
        '70 €',
        '105 €',
        '-',
        '-',
        '-',
    ],
    [
        '30 €',
        '15 €',
        '60 €',
        '70 €',
        '105 €',
        '225 €',
        '375 €',
        '450 €',
    ]
];
$additionalWork = [
    [
        '<p>Подрезка двери по высоте (полотно + коробка)</p>
            см. бланк на подрезку',
        'Замена стекла на 1 створку',
        '<p>Изготовление добора вдоль – 1 комплект:</p>
          - Сложный, с фрезеровкой паза и шипа',
        '- Простой (АР, Бараус)',
        'Подгонка вдоль 1 наличника с одной стороны.',
        'Установка ручек, купленных не в «АИ»',
        'Наклейка ТОР.',
        'Вызов мастера на консультацию',
        'Демонтаж деревянной двери',
        'Демонтаж перегородки',
        'Демонтаж и навеска полотна перегородки',
        '<p>Подрезка подгонка коробки и полотна снизу под горизонталь пола</p>
        для неровного пола',
        'Упаковка двери в полиэтиленовый пакет клиента или в сущ-ую коробку',
        'Расширение проёма на усмотрение мастера (стена только кирпич или пеноблок)',
        'Ремонт филёнок по вине клиента',
        'Сборка корпусной мебели',
        '<p>Регулировочные работы м/к дверей (петли, фурнитура) за каждое полотно</p>
        + выезд',
        'Ложный вызов',
        '<p>Стоимость и возможность увеличения проёмов силами мастеров определяется</p>
        по месту',
        'Монтаж лестниц',
    ],
    [
        '40 € орех',
        '45 € белые',
        '60 €',
        '60 €',
        '30 €',
        '15 €',
        '10 €',
        '10 €',
        '100 €',
        '40 €',
        '70 €',
        '8 %',
        '50 €',
        '40 €',
        '-',
        '10 €',
        '78 €',
        '50 €',
        '9 %',
        '25 €',
        '30 €',
        '-',
        '25 %',

    ],
    [
        '',
        '75 €',
        '75 €',
        '60 €',
        '30 €',
        '15 €',
        '10 €',
        '-',
        '10 €',
        '40 €',
        '70 €',
        '8 %',
        '50 €',
        '40 €',
        '50 €',
        '10 €',
        '75 €',
        '50 €',
        '9 %',
        '25 €',
        '30 €',
        '-',
        '25 %',
    ]
];

$lifting = '
<div class="row">
    <div class="col-md-12">
    <table class="table table-hover lifting-costs">
        <tr class="table-headers">
            <td></td>
            <td>В грузовом лифте, за дверь</td>
            <td>На руках, за дверь, за этаж</td>
            <td>Частный дом, коттедж, 1 шт.</td>
        </tr>
        <tr class="table-headers">
            <td>Двери, перегородки, входные двери</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Двери и перегородки в разборе (h до 225 см) (за шт.)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Двери в сборе (h до 225 см).</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Двери в сборе (h выше 225 см)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Двери в разборе (h выше 225 см)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Перегородки (h выше 225 см) (за полотно)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Перегородки HEADLINE (h выше 225 см) (за полотно)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Балка с рельсонаправляющей (за шт.)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Металлические двери (cм. п.9) (за шт.)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
        <tr>
            <td>Серия «Pininfarina» TR, Oicos, Bauxt и сложные конструкции (за шт.)</td>
            <td>300 a</td>
            <td>250 a</td>
            <td>250 a</td>
        </tr>
    </table>
    </div>
</div>
';
$metering = '
<div class="row">
    <div class="row">
        <div class="col-md-12">
            <p>Замер проема под межкомнатную дверь: 5 €</p>
            <p>Замер под межкомнатную перегородку или замер входной двери: 10 €</p>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-hover lifting-costs">
            <tr >
                <td>
                    <h2 class="table-headers">Виды работ</h2>
                    <span>(цена рассчитывается исходя из стоимости единицы товара без учета скидки)</span>
                </td>
                <td class="table-headers">Barrausse и Lualdi</td>
                <td class="table-headers">Другие
                    фабрики</td>
            </tr>
            <tr class="table-headers">
                <td>Двери</td>
                <td></td>
                <td></td>                
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка одностворчатой двери (без добора)</td>
                <td>105 €</td>
                <td>90 €</td>
            </tr>
            <!--**********************************************************-->
            <tr class="table-headers">
                <td>Перегородки</td>
                <td></td>
                <td></td>                
            </tr>
            <tr>
                <td><p>Установка перегородки сложной конструкции;</p>
                1 и 2 ств. купе в стену, включая мет каркас, если он входит в заказ
                </td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка 1-ств. купе по стене</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка 2-ств. купе по стене</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка металлического каркаса для 1-ств. (отдельно)</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка металлического каркаса для 2-ств.(отдельно)</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка металлического каркаса для 1-ств. (нестандарт по высоте)</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка металлического каркаса для 2-ств.(нестандарт по высоте)</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <tr>
                <td>Установка книжки (2-х полотной и 4-х полотной)</td>
                <td>15 %</td>
                <td>15 %</td>
            </tr>
            <!--**********************************************************-->
            <tr class="table-headers">
                <td>Обрамление проёма</td>
                <td></td>
                <td></td>                
            </tr>
            <tr>
                <td>Установка прямоугольного обрамления проёма — стандарт.</td>
                <td>75 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка прямоугольного обрамления проёма — нестандарт</td>
                <td>75 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка арочного обрамления проёма — стандарт</td>
                <td>75 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка арочного обрамления проёма — нестандарт</td>
                <td>75 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка добора на обрамление проема</td>
                <td>75 €</td>
                <td>90 €</td>
            </tr>
            <!--**********************************************************-->
            <tr class="table-headers">
                <td>Фрамуга</td>
                <td></td>
                <td></td>                
            </tr>
            <tr>
                <td>Установка прямоугольной фрамуги — стандарт</td>
                <td>90 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка прямоугольной фрамуги — нестандарт (2х створчатая)</td>
                <td>90 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка арочной фрамуги — стандарт</td>
                <td>90 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка арочной фрамуги — нестандарт (2х створчатая)</td>
                <td>90 €</td>
                <td>90 €</td>
            </tr>
            <tr>
                <td>Установка добора на фрамугу</td>
                <td>90 €</td>
                <td>90 €</td>
            </tr>
            <tr class="table-headers">
                <td>Металлические двери</td>
                <td></td>
                <td></td>                
            </tr>
            ' . TypesJobs($jobsMetalDoors) . '
            <tr class="table-headers">
                <td>Дополнительные работы</td>
                <td></td>
                <td></td>                
            </tr>
            ' . TypesJobs($additionalWork) . '
        </table>
    </div>
</div>
';



?>


<div class="wrap-delivery">
    <div class="delivery">
        <!-- заголовок -->
        <div class="row">
            <div class="col-md-3 .col-sm-3 col-xs-12 col-md-offset-3">
                <h1>Доставка и установка</h1>
            </div>
        </div>
        <!-- подзаголовок -->
        <div class="row">
            <div class="col-md-12 .col-sm-12 col-xs-12 col-md-offset-3 ">
                <h2>Стоимость доставки</h2>
            </div>
        </div>
        <!-- колонка цен и колонка внимание-->
        <div class="row">
            <!-- колонка цен
            <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-3 ">
                <div class="row">
                    <div class="col-md-12">
                        <h3>По Москве</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
            </div>
             -->
            <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-3 ">
                <table class="table table-responsive table-hover">
                    <caption><h3>По Москве</h3></caption>
                    <tbody>
                    <tr>
                        <td>до 5 км от МКАД......................</td>
                        <td>3000 р</td>
                    </tr>
                    <tr>
                        <td>от 5-15 км от МКАД................</td>
                        <td>3200 р</td>
                    </tr>
                    <tr>
                        <td>от 15-30 км от МКАД..............</td>
                        <td>3500 р</td>
                    </tr>
                    <tr>
                        <td>от 30-70 км от МКАД..............</td>
                        <td>3500 р</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- колонка внимание  -->
            <div class="col-md-4  .col-sm-2 col-xs-2">
                <h3> Внимание!</h3>
                <p>
                    Если по техническим причинам доставить товар «в квартиру» нет возможности, то по согласованию с
                    клиентом товар доставляется «до подъезда» или отвозится обратно на склад компании "Porteliano".
                    В этом случае, повторная доставка оплачивается клиентом дополнительно. Экстремальные виды услуг по
                    подъёму компания не оказывает.
                </p>
            </div>

        </div>
    </div>
    <!-- collapse -->
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <?php
            echo Collapse::widget([
                'items' => [
                    [
                        'label' => 'Стоимость подъёма',
                        'content' => $lifting,
                        'options' => ['class' => 'lifting-costs-head'],
                        // Открыто по-умолчанию
                        'contentOptions' => [
                            'class' => 'in panel-lifting-costs'
                        ]

                    ],
                    [
                        'label' => 'Стоимость замеров и установки',
                        'content' => $metering,
                        'contentOptions' => [
                            'class' => ' panel-metering-costs'
                        ],
                        'options' => ['class' => 'metering-costs-head'],
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
    <!-- parallax -->
    <div class="row">
        <div class="col-md-12">
            <div class="action">
                <div class="img-holder"
                     data-image="<?= Yii::getAlias('@web') . '/img/background/FOTO_INTRO_01.jpg' ?>">
                </div>
                <div class="row">
                    <div class="action-text">
                        <article class="col-md-6 col-xs-12 ">
                            <h1>АКЦИЯ</h1>
                            <p>
                                Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверей
                                и
                                перегородок на 4%!
                            </p>
                        </article>
                        <div class="col-md-2 col-xs-12">
                            <? require Yii::getAlias('@frontend') . '/views/site/home/contact-form.php' ?>
                        </div>
                    </div>

                </div>
                <script>
                    $('div.action > .img-holder').imageScroll({
                        holderClass: 'imageHolder',
                        container: $('div.action'),
                        speed: 0.1,
                        coverRatio: 0.75,
                        mediaWidth: 2000,
                        mediaHeight: 1014,
                        holderMaxHeight: 1000,
                        holderMinHeight: 866,
                        parallax: true,
                        touch: false
                    });
                </script>
            </div>
        </div>
    </div>


</div>
