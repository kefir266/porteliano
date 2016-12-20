<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */
use app\models\Section;

/*  widgets  */
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Button;


?>
<?php

$sections = new Section();
$items = [];
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}
?>

<?php require Yii::getAlias('@frontend').'/views/layouts/quickSelection.php' ?>
