<?php
/* @var $this C_UserStatsController */
/* @var $model UserStats */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'like'); ?>
		<?php echo $form->textField($model,'like'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textField($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'share'); ?>
		<?php echo $form->textField($model,'share'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view_counter'); ?>
		<?php echo $form->textField($model,'view_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchase_counter'); ?>
		<?php echo $form->textField($model,'purchase_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_event_number'); ?>
		<?php echo $form->textField($model,'fk_event_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_user_number'); ?>
		<?php echo $form->textField($model,'fk_user_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->