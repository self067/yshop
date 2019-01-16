<?php
/**
 * Created by PhpStorm.
 * User: ok
 * Date: 15.01.2019
 * Time: 12:48
 */

namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Good extends ActiveRecord
{
  public static function tableName()
  {
    return 'good';
  }
  public function getAllGoods() {
    $goods = Yii::$app->cache->get('goods');
    if(!$goods) {
      $goods = Good::find()->asArray()->all();
      Yii::$app->cache->set('goods', $goods, 120);
    }
    return $goods;

  }
  public function getGoodsCategory($cat) {
    $catGoods = Good::find()->where(['category' => $cat])->asArray()->all();
    return $catGoods;
  }

  public function getSearchResults($search) {
    $searchResults = Good::find()->where(['like', 'name', $search])->asArray()->all();
    return $searchResults;
  }

  public function getOneGood($name) {
    return Good::find()->where(['link_name' => $name])->one();
  }



}