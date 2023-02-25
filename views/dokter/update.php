<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dokter $model */

$this->title = 'Update Dokter: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Dokter', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
