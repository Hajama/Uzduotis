<?php

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Pardavimu Sarasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pardavimu-puslapis">
    <h1><?= Html::encode($this->title) ?></h1>
<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
				['class' => 'yii\grid\SerialColumn'],
				'pardavimoKodas',
				'pirkejoVardas',
				'pirkejoPavarde',
				'kategorijosPavadinimas',
				'prekesPavadinimas',
				'pirkejoTelefonoNumeris',
				'pirkejoElPastas',
				'kaina',
				'arApmoketa',
				'komentarai'
		],
]); ?>