<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subscription */

$this->title = 'Update Subscription: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subscription-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
