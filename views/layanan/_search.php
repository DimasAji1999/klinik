<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LayananSearching $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="layanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'id_kategori') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'solusi') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
