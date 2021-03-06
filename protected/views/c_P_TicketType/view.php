<?php
/* @var $this C_P_TicketTypeController */
/* @var $model P_TicketType */

$this->breadcrumbs=array(
	'P  Ticket Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_TicketType', 'url'=>array('index')),
	array('label'=>'Create P_TicketType', 'url'=>array('create')),
	array('label'=>'Update P_TicketType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_TicketType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_TicketType', 'url'=>array('admin')),
);
?>

<h1>View P_TicketType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
