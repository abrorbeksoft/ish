<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $price
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $image3
 * @property string|null $text
 * @property int|null $user_id
 * @property int|null $sub_category_id
 * @property int|null $status
 *
 * @property Comment[] $comments
 * @property SubCategory $subCategory
 * @property User $user
 * @property TagProduct[] $tagProducts
 * @property View $view
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'user_id', 'sub_category_id', 'status'], 'integer'],
            [['text'], 'string'],
            [['name', 'image1', 'image2', 'image3'], 'string', 'max' => 255],
            [['sub_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubCategory::className(), 'targetAttribute' => ['sub_category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'image3' => 'Image3',
            'text' => 'Text',
            'user_id' => 'User ID',
            'sub_category_id' => 'Sub Category ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery|CommentQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[SubCategory]].
     *
     * @return \yii\db\ActiveQuery|SubCategoryQuery
     */
    public function getSubCategory()
    {
        return $this->hasOne(SubCategory::className(), ['id' => 'sub_category_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[TagProducts]].
     *
     * @return \yii\db\ActiveQuery|TagProductQuery
     */
    public function getTagProducts()
    {
        return $this->hasMany(TagProduct::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[View]].
     *
     * @return \yii\db\ActiveQuery|ViewQuery
     */
    public function getView()
    {
        return $this->hasOne(View::className(), ['product_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
