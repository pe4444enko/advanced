<?php

namespace common\models;
use yii\UploadedFile;
use Yii;

/**
 * This is the model class for table "discounts".
 *
 * @property int $id
 * @property string $productsID
 * @property string $imageUrl
 * @property string $title
 */
class Discounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productsID', 'imageUrl', 'title'], 'required'],
            [['productsID', 'imageUrl', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productsID' => 'ProductsID',
            'imageUrl' => 'Image Url',
            'title' => 'Title',
        ];
    }
}
