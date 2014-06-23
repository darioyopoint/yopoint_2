<?php
/* @var $this C_P_CategoryController */
/* @var $data P_Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo_path')); ?>:</b>
	<?php echo CHtml::encode($data->logo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rgba_color')); ?>:</b>
	<?php echo CHtml::encode($data->rgba_color); ?>
	<br />


</div>