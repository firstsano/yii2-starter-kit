<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SeoProfile */

$this->title = 'Update Seo Profile: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Seo Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-profile-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
