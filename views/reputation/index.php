<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reputation Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reputation-event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reputation Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reputation_event_id',
            'rep_network_code',
            'change',
            'event.name',
            'person.name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
