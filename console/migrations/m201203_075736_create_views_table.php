<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%views}}`.
 */
class m201203_075736_create_views_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%views}}', [
            'id'=>$this->primaryKey(),
            'views'=>$this->integer(),
            'product_id'=>$this->integer()->unique()
        ]);

        $this->createIndex(
            'idx-views-product_id',
            'views',
            'product_id'
        );

        $this->addForeignKey(
            'fk-views-product_id',
            'views',
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
            'fk-views-product_id',
            'views'
        );

        $this->dropIndex(
            'idx-views-product_id',
            'views'
        );

        $this->dropTable('{{%views}}');
    }
}
