<?php
namespace common\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    // public $name;
    // public $price;
    // public $imageUrl;
    // public $description;

    public static function tableName()
    {
        return "{{product}}";
    }
}