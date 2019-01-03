<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customertest */

$this->title = 'Create Customertest';
$this->params['breadcrumbs'][] = ['label' => 'Customertests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customertest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
