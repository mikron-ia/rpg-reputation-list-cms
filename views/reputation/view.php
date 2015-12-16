<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReputationEvent */

$this->title = $model->reputation_event_id;
$this->params['breadcrumbs'][] = ['label' => 'Reputation Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reputation-event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reputation_event_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reputation_event_id], [
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
            'reputation_event_id',
            'rep_network_code',
            'change',
            'event_id',
            'person_id',
        ],
    ]) ?>

</div>
