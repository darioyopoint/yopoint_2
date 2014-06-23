<?php
/* @var $this C_PurchaseController */
/* @var $model Purchase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
		<?php echo $form->error($model,'total_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'row'); ?>
		<?php echo $form->textField($model,'row',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seat'); ?>
		<?php echo $form->textField($model,'seat',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'seat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user'); ?>
		<?php echo $form->textField($model,'fk_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_ticket'); ?>
		<?php echo $form->textField($model,'fk_ticket',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_ticket'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->