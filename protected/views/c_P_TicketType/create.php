<?php
/* @var $this C_P_TicketTypeController */
/* @var $model P_TicketType */

$this->breadcrumbs=array(
	'P  Ticket Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_TicketType', 'url'=>array('index')),
	array('label'=>'Manage P_TicketType', 'url'=>array('admin')),
);
?>

<h1>Create P_TicketType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>