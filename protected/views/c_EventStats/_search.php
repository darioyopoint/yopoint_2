<?php
/* @var $this C_EventStatsController */
/* @var $model EventStats */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'like_counter'); ?>
		<?php echo $form->textField($model,'like_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_counter'); ?>
		<?php echo $form->textField($model,'comment_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'share_counter'); ?>
		<?php echo $form->textField($model,'share_counter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_event_related'); ?>
		<?php echo $form->textField($model,'fk_event_related',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->