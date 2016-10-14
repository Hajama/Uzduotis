<?php

use yii\db\Migration;

/**
 * Handles the creation for table `preke`.
 */
class m161013_095336_create_preke_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('preke', [
            'id' => $this->primaryKey(),
			'pavadinimas' => $this->string()->notNull(),
			'kategorija_id' => $this->integer()->notNull(),
        ]);
		$this->addForeignKey(
			'fk-preke-kategorija_id',
			'preke',
			'kategorija_id',
			'kategorija',
			'id',
			'CASCADE'
		);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('preke');
    }
}
