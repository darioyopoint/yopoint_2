<?php
/* @var $this C_PictureController */
/* @var $model Picture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'picture-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'format'); ?>
		<?php echo $form->textField($model,'format',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'format'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copyright'); ?>
		<?php echo $form->textField($model,'copyright',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'copyright'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_cover'); ?>
		<?php echo $form->textField($model,'is_cover'); ?>
		<?php echo $form->error($model,'is_cover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_event'); ?>
		<?php echo $form->textField($model,'fk_event',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fk_event'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->