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
use Yii;

class CategoryController extends Controller
{
  public function actionIndex() {
    $goods = new Good();
    $goods = $goods->getAllGoods();
    return $this->render('index', compact('goods'));
  }

  public function actionView($cat) {
    $goods = new Good();
    $goods = $goods->getGoodsCategory($cat);
    return $this->render('view', compact('goods'));
  }

  public function actionSearch() {
    $search = htmlspecialchars(Yii::$app->request->get('search'));
    $goods = new Good();
    $goods = $goods->getSearchResults($search);
    return $this->render('search', compact('goods', 'search'));
  }

}