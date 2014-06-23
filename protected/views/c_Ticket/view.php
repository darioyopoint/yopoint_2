<?php
/* @var $this C_TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'Update Ticket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ticket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>

<h1>View Ticket #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'availability',
		'min_order',
		'max_order',
		'price',
		'sale_start',
		'sale_end',
		'fk_event',
		'fk_ticket_type',
	),
)); ?>
