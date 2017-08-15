<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reviewers".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $position
 * @property string $thumbnail_path
 * @property string $thumbnail_base_url
 */
class Reviewer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviewers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'email', 'position', 'thumbnail_path', 'thumbnail_base_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'position' => 'Position',
            'thumbnail_path' => 'Thumbnail Path',
            'thumbnail_base_url' => 'Thumbnail Base Url',
        ];
    }
}
