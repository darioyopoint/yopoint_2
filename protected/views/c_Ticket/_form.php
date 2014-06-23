<?php
/* @var $this C_TicketController */
/* @var $model Ticket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'availability'); ?>
		<?php echo $form->textField($model,'availability',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'availability'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_order'); ?>
		<?php echo $form->textField($model,'min_order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'min_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_order'); ?>
		<?php echo $form->textField($model,'max_order',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'max_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_start'); ?>
		<?php echo $form->textField($model,'sale_start'); ?>
		<?php echo $form->error($model,'sale_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_end'); ?>
		<?php echo $form->textField($model,'sale_end'); ?>
		<?php echo $form->error($model,'sale_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_event'); ?>
		<?php echo $form->textField($model,'fk_event',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_ticket_type'); ?>
		<?php echo $form->textField($model,'fk_ticket_type'); ?>
		<?php echo $form->error($model,'fk_ticket_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->