<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property string $login
 *
 * @property Post[] $posts
 */
class UserBlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login'], 'required'],
            [['name'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 32],
            [['login'], 'string', 'max' => 15],
            [['login'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'login' => 'Login',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['rel_user_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return UserBlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserBlogQuery(get_called_class());
    }
}
