<?php
use yii\widgets\ActiveForm;
?>

<h2 style="padding: 10px; text-align: center">Оформление заказа</h2>

<?php $form = ActiveForm::begin()?>

<?php $form->field($order, 'name')?>
<?php $form->field($order, 'email')?>
<?php $form->field($order, 'phone')?>
<?php $form->field($order, 'addres')?>

<button class="btn btn-success">Оформить заказ</button>


<?php $form = ActiveForm::end()?>
