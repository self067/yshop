<?php
/**
 * Created by PhpStorm.
 * User: sel
 * Date: 15.01.2019
 * Time: 18:10
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
  public static function tableName()
  {
    return 'category';
  }
  public function getCategories() {
    return Category::find()->asArray()->all();
  }
}