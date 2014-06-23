<?php
/* @var $this C_EventStatsController */
/* @var $model EventStats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-stats-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'like_counter'); ?>
		<?php echo $form->textField($model,'like_counter'); ?>
		<?php echo $form->error($model,'like_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_counter'); ?>
		<?php echo $form->textField($model,'comment_counter'); ?>
		<?php echo $form->error($model,'comment_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share_counter'); ?>
		<?php echo $form->textField($model,'share_counter'); ?>
		<?php echo $form->error($model,'share_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_event_related'); ?>
		<?php echo $form->textField($model,'fk_event_related',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_event_related'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->