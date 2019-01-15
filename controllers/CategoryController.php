<?php
/**
 * Created by PhpStorm.
 * User: ok
 * Date: 15.01.2019
 * Time: 12:06
 */

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;

class CategoryController extends Controller
{
  public function actionIndex() {
    $goods = new Good();
    $goods = $goods->getAllGoods();

    return $this->render('index', compact('goods'));
  }
}