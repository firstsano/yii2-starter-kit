<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SeoProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seo Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-profile-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Seo Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'owner_type',
            'owner_id',
            'title',
            'keywords:ntext',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
