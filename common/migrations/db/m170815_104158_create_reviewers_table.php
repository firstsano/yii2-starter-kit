<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reviewers`.
 */
class m170815_104158_create_reviewers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%reviewers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string(),
            'position' => $this->string(),
            'thumbnail_path' => $this->string(),
            'thumbnail_base_url' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%reviewers}}');
    }
}
