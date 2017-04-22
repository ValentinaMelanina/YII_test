<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m170421_225224_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
			'title' => $this->string(255)->notNull(),
			'rel_user_id' => $this->integer(),
			'text' => $this->text(),
        ]);

        $this->addForeignKey('post_user_id', 'post', 'rel_user_id', 'user', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    	$this->dropForeignKey('post_user_id', 'post');
        $this->dropTable('post');
    }
}
