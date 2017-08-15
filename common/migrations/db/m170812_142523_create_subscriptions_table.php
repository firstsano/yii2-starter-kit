<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscriptions`.
 */
class m170812_142523_create_subscriptions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%subscriptions}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->notNull(),
            'is_blocked' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%subscriptions}}');
    }
}
