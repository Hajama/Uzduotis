<?php

use yii\db\Migration;

class m161016_190121_dropForeignKey_Preke_table extends Migration
{
    public function up()
    {
    	$this->dropForeignKey('kategorija_id', 'preke');
    }

    public function down()
    {
        $this->dropForeignKey('fk-preke-kategorija_id', 'preke');
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
