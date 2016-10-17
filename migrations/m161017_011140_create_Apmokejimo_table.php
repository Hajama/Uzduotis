<?php

use yii\db\Migration;

/**
 * Handles the creation for table `apmokejimo`.
 */
class m161017_011140_create_Apmokejimo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('apmokejimo', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('apmokejimo');
    }
}
