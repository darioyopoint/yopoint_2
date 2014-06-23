<?php
/* @var $this C_PaymentController */
/* @var $data Payment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_purchase')); ?>:</b>
	<?php echo CHtml::encode($data->fk_purchase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_p_payment_type')); ?>:</b>
	<?php echo CHtml::encode($data->fk_p_payment_type); ?>
	<br />


</div>