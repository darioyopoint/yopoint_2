<?php
/* @var $this C_TicketController */
/* @var $model Ticket */
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
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'availability'); ?>
		<?php echo $form->textField($model,'availability',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_order'); ?>
		<?php echo $form->textField($model,'min_order',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_order'); ?>
		<?php echo $form->textField($model,'max_order',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_start'); ?>
		<?php echo $form->textField($model,'sale_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_end'); ?>
		<?php echo $form->textField($model,'sale_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_event'); ?>
		<?php echo $form->textField($model,'fk_event',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_ticket_type'); ?>
		<?php echo $form->textField($model,'fk_ticket_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->