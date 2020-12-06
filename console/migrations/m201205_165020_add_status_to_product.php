<?php

use yii\db\Migration;

/**
 * Class m201205_165020_add_status_to_product
 */
class m201205_165020_add_status_to_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','status',$this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product','status');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201205_165020_add_status_to_product cannot be reverted.\n";

        return false;
    }
    */
}
