<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[SubCategory]].
 *
 * @see SubCategory
 */
class SubCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SubCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SubCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
