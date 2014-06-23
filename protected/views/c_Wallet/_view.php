<?php
/* @var $this C_WalletController */
/* @var $data Wallet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_action')); ?>:</b>
	<?php echo CHtml::encode($data->fk_action); ?>
	<br />


</div>