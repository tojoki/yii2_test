<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JobCity */

$this->title = 'Update Job City: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Job Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
