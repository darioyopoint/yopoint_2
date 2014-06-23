<?php
/* @var $this C_SeatController */
/* @var $model Seat */
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
		<?php echo $form->label($model,'row'); ?>
		<?php echo $form->textField($model,'row',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seat'); ?>
		<?php echo $form->textField($model,'seat',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sold'); ?>
		<?php echo $form->textField($model,'sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_ticket_id'); ?>
		<?php echo $form->textField($model,'fk_ticket_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->