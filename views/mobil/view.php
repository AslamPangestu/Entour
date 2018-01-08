<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mobil', 'url' => ['/index.php/mobil/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['/index.php/mobil/update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['/index.php/mobil/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'merek_mobil',
            'kapasitas',
            'palt',
        ],
    ]) ?>

</div>
