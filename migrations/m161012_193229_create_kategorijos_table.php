<?php

use yii\db\Migration;

/**
 * Handles the creation for table `kategorijos`.
 */
class m161012_193229_create_kategorijos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kategorijos', [
            'id' => $this->primaryKey(),
			'pavadinimas' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('kategorijos');
    }
}
