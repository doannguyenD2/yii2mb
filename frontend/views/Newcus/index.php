<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewcusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newcuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newcus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Newcus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        '_id',
        'myid',
        'name',
        'email',
        'address',
        //'status',
        [
            'class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function ($url, $model) {
                                 return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url , [ 'data-toggle' => 'modal', 'data-target' => '#pModal']);
                            },
            ],
        ],
        ],
 ]); 

?>
<div class="modal remote fade" id="pModal">
        <div class="modal-dialog">
            <div class="modal-content loader-lg"></div>
        </div>
    </div>