<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReputationEvent */

$this->title = 'Create Reputation Event';
$this->params['breadcrumbs'][] = ['label' => 'Reputation Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reputation-event-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
