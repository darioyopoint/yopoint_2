<?php
/* @var $this C_TicketController */
/* @var $data Ticket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('availability')); ?>:</b>
	<?php echo CHtml::encode($data->availability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_order')); ?>:</b>
	<?php echo CHtml::encode($data->min_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_order')); ?>:</b>
	<?php echo CHtml::encode($data->max_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_start')); ?>:</b>
	<?php echo CHtml::encode($data->sale_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_end')); ?>:</b>
	<?php echo CHtml::encode($data->sale_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_event')); ?>:</b>
	<?php echo CHtml::encode($data->fk_event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_ticket_type')); ?>:</b>
	<?php echo CHtml::encode($data->fk_ticket_type); ?>
	<br />

	*/ ?>

</div>