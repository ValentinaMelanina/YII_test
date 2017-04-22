<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OrderBlog]].
 *
 * @see OrderBlog
 */
class OrderBlogQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OrderBlog[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OrderBlog|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
