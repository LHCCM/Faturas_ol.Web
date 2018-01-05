<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Customfatura */

$this->title = 'Create Customfatura';
$this->params['breadcrumbs'][] = ['label' => 'Customfaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customfatura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>