<?php
/**
 * Created by PhpStorm.
 * User: sel
 * Date: 15.01.2019
 * Time: 18:10
 */

namespace app\models;


use yii\db\ActiveRecord;
use yii;

class Category extends ActiveRecord
{
  public static function tableName()
  {
    return 'category';
  }

  public function getCategories() {

    $categories = Yii::$app->cache->get('categories');
    if(!$categories) {
      $categories = Category::find()->asArray()->all();
      Yii::$app->cache->set('categories', $categories, 120);
    }

    return $categories;

//    return Category::find()->asArray()->all();
  }
}