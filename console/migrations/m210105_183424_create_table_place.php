<?php

use yii\db\Migration;

/**
 * Class m210105_183424_create_table_place
 */
class m210105_183424_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    /** We are creating table in UP() function */
    public function safeUp()
    {
        $this->createTable('place',['id'=>$this->primaryKey()->unsigned(), 'place_id'=> $this->string(45)->notNull(),
            'lat'=>$this->string(45)->notNull(),
            'lng'=>$this->string(45)->notNull(),
            'country_code'=>$this->string(2)->notNull(),
            'is_country'=>$this->boolean()->notNull()]);
    }

    /**
     * {@inheritdoc}
     */
    /** We are dropping table in Down() function */
    public function safeDown()
    {
        $this->dropTable('place');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210105_183424_create_table_place cannot be reverted.\n";

        return false;
    }
    */
}
