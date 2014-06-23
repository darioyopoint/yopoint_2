<?php
/* @var $this C_UserStatsController */
/* @var $data UserStats */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('like')); ?>:</b>
	<?php echo CHtml::encode($data->like); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share')); ?>:</b>
	<?php echo CHtml::encode($data->share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_counter')); ?>:</b>
	<?php echo CHtml::encode($data->view_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_counter')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_event_number')); ?>:</b>
	<?php echo CHtml::encode($data->fk_event_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_number')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_number); ?>
	<br />

	*/ ?>

</div>