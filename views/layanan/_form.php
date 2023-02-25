<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pasien;
use app\models\Dokter;
use app\models\Kategori;

$ar_pasien = ArrayHelper::map(Pasien::find()->asArray()->all(),'id','nama');
$ar_dokter = ArrayHelper::map(Dokter::find()->asArray()->all(),'id','nama_dokter');
$ar_kategori = ArrayHelper::map(Kategori::find()->asArray()->all(),'id','nama_penyakit');

/** @var yii\web\View $this */
/** @var app\models\Layanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="layanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //  $form->field($model, 'id_pasien')->textInput() ?>
    <?= $form->field($model, 'id_pasien')->dropDownList(
        $ar_pasien,
        ['prompt'=>'... Pilih Pasien...']
    );
    ?>

    <?php //$form->field($model, 'id_dokter')->textInput() ?>
    <?= $form->field($model, 'id_dokter')->dropDownList(
        $ar_dokter,
        ['prompt'=>'... Pilih Dokter...']
    );
    ?>
    
    <?php //$form->field($model, 'id_kategori')->textInput() ?>
    <?= $form->field($model, 'id_kategori')->dropDownList(
        $ar_kategori,
        ['prompt'=>'... Pilih Kategori Penyakit...']
    );
    ?>

    <?= $form->field($model, 'keluhan')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'solusi')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
