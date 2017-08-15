<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seo_profiles".
 *
 * @property integer $id
 * @property string $owner_type
 * @property integer $owner_id
 * @property string $title
 * @property string $keywords
 * @property string $description
 */
class SeoProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo_profiles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_type', 'owner_id'], 'required'],
            [['owner_id'], 'integer'],
            [['keywords', 'description'], 'string'],
            [['owner_type', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_type' => 'Owner Type',
            'owner_id' => 'Owner ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
