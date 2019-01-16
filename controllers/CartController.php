<?php
/**
 * Created by PhpStorm.
 * User: ok
 * Date: 16.01.2019
 * Time: 14:16
 */

namespace app\controllers;
use app\models\Good;

use yii\web\Controller;

class CartController extends Controller
{
  public function actionAdd($name) {
    $good = new Good();
    $good = $good->getOneGood($name);
    return $this->renderPartial('cart', compact('good'));
  }

}