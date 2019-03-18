<?php

namespace backend\models;
use yii\UploadedFile;
use Yii;


class DiscountForm extends \yii\base\Model
{

    public $productsID;
    public $title;
    public $imageFile;

    public function rules()
    {
        return [
            ['productsID','default'],
            ['title', 'default'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    public function upload()
    {
        if ($this->validate('productsID, imageUrl, title')) {
            $this->imageFile->saveAs($this->imagePath());
            return true;
        } else {
            return false;
        }
    }

    public function imagePath()
    {
        return '../../uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
    }
}
