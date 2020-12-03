<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m201130_162752_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'text'=>$this->text(),
            'user_id'=>$this->integer(),
            'product_id'=>$this->integer()
        ]);

        $this->createIndex(
            'idx-comments-user_id',
            'comments',
            'user_id'
        );

        $this->addForeignKey(
            'fk-comments-user_id',
            'comments',
            'user_id',
            'user',
            'id',
            'cascade'
        );

        $this->createIndex(
            'idx-comments-product_id',
            'comments',
            'product_id'
        );

        $this->addForeignKey(
            'fk-comments-product_id',
            'comments',
            'product_id',
            'product',
            'id',
            'cascade'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-comments-product_id',
            'comments'
        );
        $this->dropIndex(
            'idx-comments-product_id',
            'comments'
        );

        $this->dropForeignKey(
            'fk-comments-user_id',
            'comments'
        );

        $this->dropIndex(
            'idx-comments-user_id',
            'comments'
        );


        $this->dropTable('{{%comments}}');
    }
}
