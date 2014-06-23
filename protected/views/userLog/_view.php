<?php
/* @var $this UserLogController */
/* @var $data UserLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_action')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_action); ?>
	<br />


</div>