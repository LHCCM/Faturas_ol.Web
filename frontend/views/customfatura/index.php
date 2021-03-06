<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomfaturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customfaturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customfatura-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php //echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Customfatura', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			//['class' => 'yii\grid\SerialColumn'],

			//'id',
			'numero',
			'data',
			'nif_empresa',
			'nome_empresa',
			//'morada_empresa',

			['class' => 'yii\grid\ActionColumn'],
		],
	]);

	?>


</div>
