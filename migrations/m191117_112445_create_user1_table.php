<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user1}}`.
 */
class m191117_112445_create_user1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user1}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(55)->notNull()->unique(),
            'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user1}}');
    }
}
