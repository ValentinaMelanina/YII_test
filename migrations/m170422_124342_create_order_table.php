<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m170422_124342_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
			'name' => $this->string(255),
			'email' => $this->string(255)->notNull(),
			'address' => $this->string(255),
			'phone' => $this->string(10),
			'date_create' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order');
    }
}
