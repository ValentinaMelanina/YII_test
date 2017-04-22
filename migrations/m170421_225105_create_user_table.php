<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170421_225105_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
			'name' => $this->string(45)->defaultValue('Guest'),
			'password' => $this->string(32),
			'login' => $this->string(15)->unique()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
