<?php

use yii\db\Migration;

class m161016_203625_add_foreignkeyTo_pardavimai_table_prekesPavadinimas_column extends Migration
{
    public function up()
    {
		$this->addForeignKey('fk-pardavimai-preke_id', 'pardavimai', 'preke', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m161016_203625_add_foreignkeyTo_pardavimai_table_prekesPavadinimas_column cannot be reverted.\n";

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
