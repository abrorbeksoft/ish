<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag_products}}`.
 */
class m201130_152553_create_tag_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tag_products}}', [
            'product_id'=>$this->integer(),
            'tag_id'=>$this->integer(),
        ]);

        $this->createIndex(
            'idx-tag_products-product_id',
            'tag_products',
            'product_id'
        );

        $this->addForeignKey(
            'fk-tag_products-product_id',
            'tag_products',
            'product_id',
            'product',
            'id',
            'cascade'
        );

        $this->createIndex(
            'idx-tag_products-tag_id',
            'tag_products',
            'tag_id'
        );



        $this->addForeignKey(
            'fk-tag_products-tag_id',
            'tag_products',
            'tag_id',
            'tags',
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
            'fk-tag_products-product_id',
            'tag_products'
        );

        $this->dropIndex(
            'idx-tag_products-product_id',
            'tag_products'
        );

        $this->dropForeignKey(
            'fk-tag_products-tag_id',
            'tag_products'
        );

        $this->dropIndex(
            'idx-tag_products-tag_id',
            'tag_products'
        );

        $this->dropTable('{{%tag_products}}');
    }
}
