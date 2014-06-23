<?php
/* @var $this UserLogController */
/* @var $model UserLog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-log-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user'); ?>
		<?php echo $form->textField($model,'fk_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_action'); ?>
		<?php echo $form->textField($model,'fk_user_action'); ?>
		<?php echo $form->error($model,'fk_user_action'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->