<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PhuongxaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phuongxa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'TinhThanhPho') ?>

    <?= $form->field($model, 'MaTP') ?>

    <?= $form->field($model, 'QuanHuyen') ?>

    <?= $form->field($model, 'MaQH') ?>

    <?php // echo $form->field($model, 'PhuongXa') ?>

    <?php // echo $form->field($model, 'MaPX') ?>

    <?php // echo $form->field($model, 'Cap') ?>

    <?php // echo $form->field($model, 'TenTiengAnh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
