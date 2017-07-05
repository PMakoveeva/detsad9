<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $date
 * @property string $author
 * @property string $description
 * @property string $text
 * @property string $tag
 * @property string $category
 * @property string $image
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'integer'],
            [['title', 'author', 'description', 'text', 'tag', 'image'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 50],
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
            'date' => 'Date',
            'author' => 'Author',
            'description' => 'Description',
            'text' => 'Text',
            'tag' => 'Tag',
            'category' => 'Category',
            'image' => 'Image',
        ];
    }
}
