<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Layanan $model */

$this->title = 'Tambah Layanan';
$this->params['breadcrumbs'][] = ['label' => 'Layanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
