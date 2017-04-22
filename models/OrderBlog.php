<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $date_create
 */
class OrderBlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_create'], 'safe'],
            [['name', 'email', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 10],
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
            'email' => 'Email',
            'address' => 'Address',
            'phone' => 'Phone',
            'date_create' => 'Date Create',
        ];
    }

    /**
     * @inheritdoc
     * @return OrderBlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderBlogQuery(get_called_class());
    }
}
