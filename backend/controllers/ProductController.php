<?php

namespace backend\controllers;
use Yii;
use yii\web\UploadedFile;
use backend\models\ProductForm;
use common\models\Product;
use yii\filters\AccessControl;

class ProductController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create','delete', 'edit', 'index'],
                        'roles' => ['admin','merchendaiser'],
                    ],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new ProductForm();

        // if($model ->load(Yii::$app->request->post()) && $model-> validate());
        // {
        //     //$this->redirect(['product/index']);
        // }
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) 
            {
                // file is uploaded successfully
                $product =new Product();
                $product->name = $model ->name;
                $product->price = $model->price;
                $product->description = $model->description;
                $product->imageUrl = '../'.$model->imagePath();
                $product-> save();
                $this->redirect(['product/index']);
            }
        }
        return $this->render('create', ['model' => $model]);
    
    }

    public function actionDelete($id)
    {
        $product = Product::findOne($id);
        $product->delete();

        $this->redirect(['product/index']);
    }

    public function actionEdit($id)
    {
        $product = Product::findOne($id);
        if($product !=null)
            return $this->render('edit', ['model' => $product]);
        else
            $this->redirect(['product/index']);
    }

    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index',['model' => $products]);
    }

}
