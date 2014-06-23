<?php
/* @var $this C_UserStatsController */
/* @var $model UserStats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-stats-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'like'); ?>
		<?php echo $form->textField($model,'like'); ?>
		<?php echo $form->error($model,'like'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment'); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share'); ?>
		<?php echo $form->textField($model,'share'); ?>
		<?php echo $form->error($model,'share'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_counter'); ?>
		<?php echo $form->textField($model,'view_counter'); ?>
		<?php echo $form->error($model,'view_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_counter'); ?>
		<?php echo $form->textField($model,'purchase_counter'); ?>
		<?php echo $form->error($model,'purchase_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_event_number'); ?>
		<?php echo $form->textField($model,'fk_event_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_event_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_number'); ?>
		<?php echo $form->textField($model,'fk_user_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_user_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->