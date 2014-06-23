<?php
/* @var $this C_EventStatsController */
/* @var $data EventStats */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_counter')); ?>:</b>
	<?php echo CHtml::encode($data->view_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_counter')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('like_counter')); ?>:</b>
	<?php echo CHtml::encode($data->like_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_counter')); ?>:</b>
	<?php echo CHtml::encode($data->comment_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_counter')); ?>:</b>
	<?php echo CHtml::encode($data->share_counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_event_related')); ?>:</b>
	<?php echo CHtml::encode($data->fk_event_related); ?>
	<br />


</div>