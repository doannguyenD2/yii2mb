<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Newcus */

$this->title = 'Create Newcus';
$this->params['breadcrumbs'][] = ['label' => 'Newcuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newcus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
