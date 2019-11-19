<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user1_post1}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user1}}`
 * - `{{%post1}}`
 */
class m191117_113122_create_junction_table_for_user1_and_post1_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user1_post1}}', [
            'user1_id' => $this->integer(),
            'post1_id' => $this->integer(),
            'created_at' => $this->integer(),
            'PRIMARY KEY(user1_id, post1_id)',
        ]);

        // creates index for column `user1_id`
        $this->createIndex(
            '{{%idx-user1_post1-user1_id}}',
            '{{%user1_post1}}',
            'user1_id'
        );

        // add foreign key for table `{{%user1}}`
        $this->addForeignKey(
            '{{%fk-user1_post1-user1_id}}',
            '{{%user1_post1}}',
            'user1_id',
            '{{%user1}}',
            'id',
            'CASCADE'
        );

        // creates index for column `post1_id`
        $this->createIndex(
            '{{%idx-user1_post1-post1_id}}',
            '{{%user1_post1}}',
            'post1_id'
        );

        // add foreign key for table `{{%post1}}`
        $this->addForeignKey(
            '{{%fk-user1_post1-post1_id}}',
            '{{%user1_post1}}',
            'post1_id',
            '{{%post1}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user1}}`
        $this->dropForeignKey(
            '{{%fk-user1_post1-user1_id}}',
            '{{%user1_post1}}'
        );

        // drops index for column `user1_id`
        $this->dropIndex(
            '{{%idx-user1_post1-user1_id}}',
            '{{%user1_post1}}'
        );

        // drops foreign key for table `{{%post1}}`
        $this->dropForeignKey(
            '{{%fk-user1_post1-post1_id}}',
            '{{%user1_post1}}'
        );

        // drops index for column `post1_id`
        $this->dropIndex(
            '{{%idx-user1_post1-post1_id}}',
            '{{%user1_post1}}'
        );

        $this->dropTable('{{%user1_post1}}');
    }
}
