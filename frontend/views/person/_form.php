<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\widgets\DatePicker;
use frontend\models\Sex;
/* @var $this yii\web\View */
/* @var $model frontend\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>
    </div>
<div class="col-sm-6 col-md-6">
    <?= $form->field($model, 'CID')->textInput(['maxlength' => true,'type' => 'number']) ?>
    </div>
<div class="col-sm-6 col-md-6">
    <?= $form->field($model, 'NAME')->textarea(['rows' => 1]) ?>
    </div>
<div class="col-sm-6 col-md-6">
    <?= $form->field($model, 'LNAME')->textarea(['rows' => 1]) ?>
</div>
    <div class="col-sm-6 col-md-6">


        <?=
        $form->field($model, 'SEX')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Sex::find()->all(), 'ID_SEX', 'SEX'),
            'options' => ['placeholder' => 'เลือกเผศ ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
        ?>
    </div>
<div class="col-sm-6 col-md-6">
    <?php echo "<label class='control-label'>วันเกิด</label>";
            //echo "<div class='col col-sm-9'>";
            echo DatePicker::widget([
                'model' => $model,
                //'language' => 'th',
                //'dateFormat' => 'dd-MM-yyyy',
                'attribute' => 'BIRTH',
                'options' => ['placeholder' => 'เลือก วันเกิด ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-m-d',
                    'todayHighlight'=> true,
                  ]
            ]);
          //echo "</div><br>";
          echo "<br>";
      ?>
      </div>
<div class="col-sm-6 col-md-6">
    <?= $form->field($model, 'DISSES')->textarea(['rows' => 1]) ?>
</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
