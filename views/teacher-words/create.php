<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TeacherWords */

$this->title = 'Create Teacher Words';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Words', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-words-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
