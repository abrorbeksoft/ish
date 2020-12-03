<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201130_151729_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'price'=>$this->integer(),
            'image1'=>$this->string(),
            'image2'=>$this->string(),
            'image3'=>$this->string(),
            'text'=>$this->text(),
            'user_id'=>$this->integer(),
            'sub_category_id'=>$this->integer()
        ]);

        $this->createIndex(
            'idx-product-sub_category_id',
            'product',
            'sub_category_id'
        );

        $this->addForeignKey(
            'fk-product-sub_category_id',
            'product',
            'sub_category_id',
            'sub_category',
            'id',
            'cascade'
        );

        $this->createIndex(
            'idx-product-user_id',
            'product',
            'user_id'
        );
        $this->addForeignKey(
            'fk-product-user_id',
            'product',
            'user_id',
            'user',
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
            'fk-product-sub_category_id',
            'sub_category_id'
        );

        $this->dropIndex(
            'fk-product-sub_category_id',
            'sub_category_id'
        );

        $this->dropForeignKey(
            'fk-product-user_id',
            'product'
        );

        $this->dropIndex(
            'fk-product-user_id',
            'product'
        );

        $this->dropTable('{{%product}}');
    }
}
