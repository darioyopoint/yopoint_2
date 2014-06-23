<?php
/* @var $this C_P_TicketTypeController */
/* @var $model P_TicketType */

$this->breadcrumbs=array(
	'P  Ticket Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_TicketType', 'url'=>array('index')),
	array('label'=>'Create P_TicketType', 'url'=>array('create')),
	array('label'=>'View P_TicketType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_TicketType', 'url'=>array('admin')),
);
?>

<h1>Update P_TicketType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>