<?php
use yii\widgets\ActiveForm;
?>

<h2 style="padding: 10px; text-align: center">Оформление заказа</h2>

<?php $form = ActiveForm::begin()?>

<?= $form->field($order, 'name')?>
<?= $form->field($order, 'email')?>
<?= $form->field($order, 'phone')?>
<?= $form->field($order, 'address')?>

<button class="btn btn-success">Оформить заказ</button>


<?php ActiveForm::end()?>
