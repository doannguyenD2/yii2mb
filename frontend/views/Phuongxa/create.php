<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phuongxa */

$this->title = 'Create Phuongxa';
$this->params['breadcrumbs'][] = ['label' => 'Phuongxas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phuongxa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
