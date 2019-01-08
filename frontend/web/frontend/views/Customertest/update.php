<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\customertest */

$this->title = 'Update Customertest: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customertests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customertest-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
