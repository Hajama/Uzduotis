<?php

use yii\db\Migration;

class m161015_211444_create_pardavimoKodas_pardavimaiTable extends Migration
{
    public function up()
    {
		$this->addColumn('pardavimai', 'pardavimoKodas', 'string not null');
    }

    public function down()
    {
        echo "m161015_211444_create_pardavimoKodas_pardavimaiTable cannot be reverted.\n";

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
