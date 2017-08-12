<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subscriptions".
 *
 * @property integer $id
 * @property string $email
 * @property integer $is_blocked
 */
class Subscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscriptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['is_blocked'], 'integer'],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
            [['is_blocked'], 'default', 'value' => false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'is_blocked' => 'Is Blocked',
        ];
    }
}
