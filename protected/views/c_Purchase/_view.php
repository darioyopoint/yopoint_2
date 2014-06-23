<?php
/* @var $this C_PurchaseController */
/* @var $data Purchase */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_price')); ?>:</b>
	<?php echo CHtml::encode($data->total_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('row')); ?>:</b>
	<?php echo CHtml::encode($data->row); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seat')); ?>:</b>
	<?php echo CHtml::encode($data->seat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_ticket')); ?>:</b>
	<?php echo CHtml::encode($data->fk_ticket); ?>
	<br />

	*/ ?>

</div>