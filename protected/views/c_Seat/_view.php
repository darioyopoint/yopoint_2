<?php
/* @var $this C_SeatController */
/* @var $data Seat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('row')); ?>:</b>
	<?php echo CHtml::encode($data->row); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seat')); ?>:</b>
	<?php echo CHtml::encode($data->seat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sold')); ?>:</b>
	<?php echo CHtml::encode($data->sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_ticket_id')); ?>:</b>
	<?php echo CHtml::encode($data->fk_ticket_id); ?>
	<br />


</div>