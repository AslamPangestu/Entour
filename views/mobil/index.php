<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMobil */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mobil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Mobil', ['/index.php/mobil/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'merek_mobil',
            'kapasitas',
            'palt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
