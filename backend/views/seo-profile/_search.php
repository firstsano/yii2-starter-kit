<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\SeoProfileSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="seo-profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'owner_type') ?>

    <?php echo $form->field($model, 'owner_id') ?>

    <?php echo $form->field($model, 'title') ?>

    <?php echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
