<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'GautiPrekes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-gautiPrekes">
    <h1><?= Html::encode($prekes->pavadinimas) ?></h1>

    <p>
       Html::echo($prekes)
    </p>

    <code><?= __FILE__ ?></code>
</div>