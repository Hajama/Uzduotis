<?php

use yii\db\Migration;

/**
 * Handles the creation for table `pardavimai`.
 */
class m161012_185529_create_pardavimai_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pardavimai', [
            'id' => $this->primaryKey(),
			'kategorija' => $this->string()->notNull(),
			'preke' => $this->string()->notNull(),
			'pirkejoVardas' => $this->string()->notNull(),
			'pirkejoPavarde' => $this->string()->notNull(),
			'pirkejoTelefonoNumeris' => $this->string()->notNull(),
			'pirkejoElPastas' => $this->string(),
			'kaina' => $this->double()->notNull(),
			'arApmoketa' => $this->boolean()->notNull(),
			'komentarai' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pardavimai');
    }
}
