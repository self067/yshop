<?php
use yii\helpers\Url;
?>

<div class="container">
  <nav class="nav nav-menu">
    <a class="nav-link active" href="/yshop">Всё меню</a>
    <?php foreach( $data as $cat) {?>
    <a class="nav-link" href="<?=Url::to(['category/view', 'cat'=>$cat['cat_name']])?>"><?=$cat['browser_name']?></a>
    <?php } ?>
  </nav>
</div>
