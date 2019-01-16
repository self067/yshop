<?=\app\widgets\MenuWidget::widget()?>
<?php use yii\helpers\Url;?>

<div class="container">
    <div class="row">

      <?php foreach( $goods as $good) { ?>
        <div class="col-6 col-md-4">
            <div class="product">
                <div class="product-img">
                    <img src="/yshop/img/<?=$good['img']?>" alt="<?=$good['name']?>">
                </div>
                <div class="product-name"><?=$good['name']?></div>
                <div class="product-descr">Состав: <?=$good['composition']?></div>
                <div class="product-price">Цена: <?=$good['price']?> рублей</div>
                <div class="product-buttons">
                    <a href="#" data-name="<?=$good['link_name']?>"  class="product-button__add btn btn-success">Заказать</a>
                    <a href="<?=Url::to(['good/index', 'name'=> $good['link_name']] )?>" type="button" class="product-button__more btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>

      <?php } ?>
    </div>
</div>
