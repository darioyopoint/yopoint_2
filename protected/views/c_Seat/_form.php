<?php
/* @var $this C_SeatController */
/* @var $model Seat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'row'); ?>
		<?php echo $form->textField($model,'row',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seat'); ?>
		<?php echo $form->textField($model,'seat',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'seat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sold'); ?>
		<?php echo $form->textField($model,'sold'); ?>
		<?php echo $form->error($model,'sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_ticket_id'); ?>
		<?php echo $form->textField($model,'fk_ticket_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_ticket_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->