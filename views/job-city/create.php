<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JobCity */

$this->title = 'Create Job City';
$this->params['breadcrumbs'][] = ['label' => 'Job Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
