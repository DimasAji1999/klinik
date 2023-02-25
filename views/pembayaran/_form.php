<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Layanan;


$ar_layanan = ArrayHelper::map(Layanan::find()->asArray()->all(),'id','id_pasien');

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'id_layanan')->textInput() ?>
    <?= $form->field($model, 'id_layanan')->dropDownList(
        $ar_layanan,
        ['prompt'=>'... Pilih ID Layanan...']
    );
    ?>

    <?= $form->field($model, 'harga')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
