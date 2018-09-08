<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bmitest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bmitests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bmitest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'cid' => $model->cid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'cid' => $model->cid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Genraet PDF', ['gen-pdf', 'id' =>  $model->id, 'cid' => $model->cid], ['class' => 'btn btn-primary']) ?>


        <div class="panel panel-default">
          <div class="panel-body">
             <?= dosamigos\gallery\Gallery::widget(['items' => $model->getThumbnails($model->ref,$model->fname)]);?>
          </div>
        </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'groupid',
            'cid',
            'fname',
            'lname',
            'age',
            'sex',
            'weight',
            'height',
            [
                'attribute' =>'bmi',
                'format'=>['decimal',2]
            ],

            
            'gradebmiName',
            'waistline',
            'gradewaistlineName',
            'bpsys',
            'gradebpsysName',
            'bpdi',
            'gradebpdiName',
            
            
            'pushup',
            'gradepushup',
            'situp',
            'gradesitup',
            'heartrate',
            'gradeheart',
            'gripst',
            'griperweight',
            'gradegripName',
            'legpress',
            'legperweight',
            'gradeleg',
            'flexibility',
            
            'gradeflexName',
            'run2400',
            'graderunName',
            'dateserv',
        ],
    ]) ?>

</div>
