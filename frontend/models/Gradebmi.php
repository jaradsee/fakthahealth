<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gradebmi".
 *
 * @property integer $BMI_ID
 * @property integer $BMI_GRADE
 * @property string $BMI_NAME
 * @property string $BMI_DETIAL
 */
class Gradebmi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gradebmi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BMI_ID'], 'required'],
            [['BMI_ID', 'BMI_GRADE'], 'integer'],
            [['BMI_NAME'], 'string', 'max' => 250],
            [['BMI_DETIAL'], 'string', 'max' => 1250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BMI_ID' => 'Bmi  ID',
            'BMI_GRADE' => 'Bmi  Grade',
            'BMI_NAME' => 'Bmi  Name',
            'BMI_DETIAL' => 'Bmi  Detial',
        ];
    }
}
