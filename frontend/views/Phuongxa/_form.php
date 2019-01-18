<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phuongxa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phuongxa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TinhThanhPho') ?>

    <?= $form->field($model, 'MaTP') ?>

    <?= $form->field($model, 'QuanHuyen') ?>

    <?= $form->field($model, 'MaQH') ?>

    <?= $form->field($model, 'PhuongXa') ?>

    <?= $form->field($model, 'MaPX') ?>

    <?= $form->field($model, 'Cap') ?>

    <?= $form->field($model, 'TenTiengAnh') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
