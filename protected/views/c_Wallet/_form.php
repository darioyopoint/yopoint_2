<?php
/* @var $this C_WalletController */
/* @var $model Wallet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wallet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_user_id'); ?>
		<?php echo $form->textField($model,'fk_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_action'); ?>
		<?php echo $form->textField($model,'fk_action'); ?>
		<?php echo $form->error($model,'fk_action'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->