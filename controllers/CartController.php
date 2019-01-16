<?php
/**
 * Created by PhpStorm.
 * User: ok
 * Date: 16.01.2019
 * Time: 14:16
 */

namespace app\controllers;
use app\models\Good;
use app\models\Cart;
use Yii;
use yii\web\Controller;

class CartController extends Controller
{
  public function actionOpen() {
    $session = Yii::$app->session;
    $session->open();
//    $session->remove('cart');
//    $session->remove('cart.totalSum');
//    $session->remove('cart.totalQuantity');
    return $this->renderPartial('cart', compact('good', 'session'));

  }
  public function actionAdd($name) {
    $good = new Good();
    $good = $good->getOneGood($name);
    $session = Yii::$app->session;
    $session->open();
//    $session->remove('cart');
    $cart = new Cart();
    $cart->addToCart($good);
    return $this->renderPartial('cart', compact('good', 'session'));
  }
}