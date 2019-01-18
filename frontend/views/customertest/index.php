<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustomertestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customertests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customertest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customertest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        '_id',
        'name',
        'email',
        'address',
        //'status',
        [
            'class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function ($url, $model) {
                                 return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url , [ 'data-toggle' => 'modal', 'data-target' => '#pModal1']);
                            },
                'update' => function ($url, $model) {
                                 return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url , [ 'data-toggle' => 'modal', 'data-target' => '#pModal2']);
                            },
            ],
        ],
        ],
 ]); 

?>
<div class="modal remote fade" id="pModal1">
        <div class="modal-dialog">
            <div class="modal-content loader-lg"></div>
        </div>
    </div>
<div class="modal remote fade" id="pModal2">
        <div class="modal-dialog">
           <div class="modal-content loader-lg"></div>
        </div>
    </div>
