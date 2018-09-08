<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gradebpsys".
 *
 * @property integer $BPSYS_ID
 * @property integer $BPSYS_GRADE
 * @property string $BPSYS_NAME
 * @property string $BPSYS_DETIAL
 */
class Gradebpsys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gradebpsys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BPSYS_ID'], 'required'],
            [['BPSYS_ID', 'BPSYS_GRADE'], 'integer'],
            [['BPSYS_NAME'], 'string', 'max' => 250],
            [['BPSYS_DETIAL'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BPSYS_ID' => 'Bpsys  ID',
            'BPSYS_GRADE' => 'Bpsys  Grade',
            'BPSYS_NAME' => 'Bpsys  Name',
            'BPSYS_DETIAL' => 'Bpsys  Detial',
        ];
    }
}
