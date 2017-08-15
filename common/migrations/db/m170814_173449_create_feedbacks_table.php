<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedbacks`.
 */
class m170814_173449_create_feedbacks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%feedbacks}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'body' => $this->text()->notNull(),
            'reviewer_type' => $this->string()->notNull(),
            'reviewer_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-feedbacks-reviewer_type',
            '{{%feedbacks}}',
            'reviewer_type'
        );

        $this->createIndex(
            'idx-feedbacks-reviewer_id',
            '{{%feedbacks}}',
            'reviewer_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropIndex(
            'idx-post-reviewer_type',
            '{{%feedbacks}}'
        );

        $this->dropIndex(
            'idx-post-reviewer_id',
            '{{%feedbacks}}'
        );

        $this->dropTable('{{%feedbacks}}');
    }
}
