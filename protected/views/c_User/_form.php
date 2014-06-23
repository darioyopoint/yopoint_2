<?php
/* @var $this C_UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verified'); ?>
		<?php echo $form->textField($model,'verified'); ?>
		<?php echo $form->error($model,'verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
		<?php echo $form->error($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar_path'); ?>
		<?php echo $form->textField($model,'avatar_path',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'avatar_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_address'); ?>
		<?php echo $form->textField($model,'fk_address',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_role'); ?>
		<?php echo $form->textField($model,'fk_user_role'); ?>
		<?php echo $form->error($model,'fk_user_role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_discount'); ?>
		<?php echo $form->textField($model,'fk_user_discount'); ?>
		<?php echo $form->error($model,'fk_user_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_type'); ?>
		<?php echo $form->textField($model,'fk_user_type'); ?>
		<?php echo $form->error($model,'fk_user_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->