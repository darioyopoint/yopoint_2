<?php
/* @var $this C_UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verified')); ?>:</b>
	<?php echo CHtml::encode($data->verified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar_path')); ?>:</b>
	<?php echo CHtml::encode($data->avatar_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_address')); ?>:</b>
	<?php echo CHtml::encode($data->fk_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_role')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_discount')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user_type')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user_type); ?>
	<br />

	*/ ?>

</div>