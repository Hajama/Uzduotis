<?php

use yii\grid\GridView;
use yii\helpers\Html;

GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
				'pirkejoVardas',
				'pirkejoPavarde'
		],
]); ?>

