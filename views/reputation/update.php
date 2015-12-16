<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReputationEvent */

$this->title = 'Update Reputation Event: ' . ' ' . $model->reputation_event_id;
$this->params['breadcrumbs'][] = ['label' => 'Reputation Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reputation_event_id, 'url' => ['view', 'id' => $model->reputation_event_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reputation-event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
