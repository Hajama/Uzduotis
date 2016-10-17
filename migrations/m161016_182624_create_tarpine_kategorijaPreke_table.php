<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tarpine_kategorijapreke`.
 */
class m161016_182624_create_tarpine_kategorijaPreke_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kategorija_preke', [
            'id' => $this->primaryKey(),
        	'kategorija_id' => $this->integer()->notNull(),
        	'preke_id' => $this->integer()->notNull(),
        ]);
        
        $this->addForeignKey('fk-preke-kategorija_kategorija_id', 'kategorija_preke', 'kategorija_id', 'kategorijos', 'id', 
        		'CASCADE');
        $this->addForeignKey('fk-preke-kategorija_preke_id', 'kategorija_preke', 'preke_id', 'preke', 'id',
        		'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tarpine_kategorijapreke');
    }
}
