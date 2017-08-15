<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedbacks".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $reviewer_type
 * @property integer $reviewer_id
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['body', 'reviewer_type', 'reviewer_id'], 'required'],
            [['body'], 'string'],
            [['reviewer_id'], 'integer'],
            [['title', 'reviewer_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'reviewer_type' => 'Reviewer Type',
            'reviewer_id' => 'Reviewer ID',
        ];
    }
}
