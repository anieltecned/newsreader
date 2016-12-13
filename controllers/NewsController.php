<?php
// 1. specify namespace at the top (in basic application usually app\controllers); 
namespace app\controllers;

//use Yii; 
use yii\web\Controller;

class NewsController extends Controller
{
	public function actionIndex()
	{
		echo "this is my first controller";
	}

	public function actionItemsList()
	{
		return $this->render('itemsList');
	}
}


?>