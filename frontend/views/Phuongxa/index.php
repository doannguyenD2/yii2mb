<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PhuongxaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phuongxas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phuongxa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phuongxa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'TinhThanhPho',
            'MaTP',
            'QuanHuyen',
            'MaQH',
            'PhuongXa',
            'MaPX',
            'Cap',
            'TenTiengAnh',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
