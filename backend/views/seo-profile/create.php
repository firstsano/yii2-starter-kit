<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SeoProfile */

$this->title = 'Create Seo Profile';
$this->params['breadcrumbs'][] = ['label' => 'Seo Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-profile-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
