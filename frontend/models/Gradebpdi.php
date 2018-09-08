<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gradebpdi".
 *
 * @property integer $BPDI_ID
 * @property integer $BPDI_GRADE
 * @property string $BPDI_NAME
 * @property string $BPDI_DETIAL
 */
class Gradebpdi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gradebpdi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BPDI_ID'], 'required'],
            [['BPDI_ID', 'BPDI_GRADE'], 'integer'],
            [['BPDI_NAME', 'BPDI_DETIAL'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BPDI_ID' => 'Bpdi  ID',
            'BPDI_GRADE' => 'Bpdi  Grade',
            'BPDI_NAME' => 'Bpdi  Name',
            'BPDI_DETIAL' => 'Bpdi  Detial',
        ];
    }
}
