<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeacherWordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Words';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-words-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Words', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'cover',
            'position',
            'intro:ntext',
            //'sortorder',
            //'ctime:datetime',
            //'is_del',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
