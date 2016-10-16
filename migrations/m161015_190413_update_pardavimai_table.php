<?php

use yii\db\Migration;

class m161015_190413_update_pardavimai_table extends Migration
{
    public function up()
    {
		$this->alterColumn('pardavimai', 
				'kategorija', 'int');
		$this->alterColumn('pardavimai',
				'preke', 'int');
    }

    public function down()
    {
        echo "m161015_190413_update_pardavimai_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
