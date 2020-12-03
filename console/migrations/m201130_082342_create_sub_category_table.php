<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sub_category}}`.
 */
class m201130_082342_create_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sub_category}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'image_url'=>$this->string(),
            'category_id'=>$this->integer()->defaultValue(1),
        ]);

        $this->createIndex(
            'idx-sub_category-category_id',
            'sub_category',
            'category_id');

        $this->addForeignKey(
            'fk-sub_category-category_id',
            'sub_category',
            'category_id',
            'category',
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
            'fk-sub_category-category_id',
            'category_id'
        );

        $this->dropIndex(
            'idx-sub_category-category_id',
            'sub_category'
        );



        $this->dropTable('{{%sub_category}}');
    }
}
