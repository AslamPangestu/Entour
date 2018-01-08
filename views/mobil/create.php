<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mobil */

$this->title = 'Tambah Mobil';
$this->params['breadcrumbs'][] = ['label' => 'Mobil', 'url' => ['/index.php/mobil/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
