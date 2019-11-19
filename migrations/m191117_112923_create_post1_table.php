<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post1}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user1}}`
 */
class m191117_112923_create_post1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post1}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'body' => $this->text(),
            'created_by' => $this->integer()->notNull(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-post1-created_by}}',
            '{{%post1}}',
            'created_by'
        );

        // add foreign key for table `{{%user1}}`
        $this->addForeignKey(
            '{{%fk-post1-created_by}}',
            '{{%post1}}',
            'created_by',
            '{{%user1}}',
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
            '{{%fk-post1-created_by}}',
            '{{%post1}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-post1-created_by}}',
            '{{%post1}}'
        );

        $this->dropTable('{{%post1}}');
    }
}
