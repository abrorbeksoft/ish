<?php

use yii\db\Migration;

/**
 * Class m201204_075216_add_phone_to_product
 */
class m201204_075216_add_phone_to_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','phone',$this->string());
        $this->addColumn('user','image',$this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user','phone');
        $this->dropColumn('user','image');


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201204_075216_add_phone_to_product cannot be reverted.\n";

        return false;
    }
    */
}
