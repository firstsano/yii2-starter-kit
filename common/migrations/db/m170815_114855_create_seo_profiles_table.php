<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seo_profiles`.
 */
class m170815_114855_create_seo_profiles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%seo_profiles}}', [
            'id' => $this->primaryKey(),
            'owner_type' => $this->string()->notNull(),
            'owner_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'keywords' => $this->text(),
            'description' => $this->text(),
        ]);

        $this->createIndex(
            'idx-seo_profiles-owner_type',
            '{{%seo_profiles}}',
            'owner_type'
        );

        $this->createIndex(
            'idx-seo_profiles-owner_id',
            '{{%seo_profiles}}',
            'owner_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropIndex('idx-seo_profiles-owner_id', '{{%seo_profiles}}');
        $this->dropIndex('idx-seo_profiles-owner_type', '{{%seo_profiles}}');
        $this->dropTable('{{%seo_profiles}}');
    }
}
