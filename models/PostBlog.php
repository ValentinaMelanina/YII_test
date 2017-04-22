<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property integer $rel_user_id
 * @property string $text
 *
 * @property User $relUser
 */
class PostBlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['rel_user_id'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['rel_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['rel_user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'rel_user_id' => 'Rel User ID',
            'text' => 'Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUser()
    {
        return $this->hasOne(User::className(), ['id' => 'rel_user_id']);
    }

    /**
     * @inheritdoc
     * @return PostBlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostBlogQuery(get_called_class());
    }
}
