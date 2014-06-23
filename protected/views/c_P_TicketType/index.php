<?php
/* @var $this C_P_TicketTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Ticket Types',
);

$this->menu=array(
	array('label'=>'Create P_TicketType', 'url'=>array('create')),
	array('label'=>'Manage P_TicketType', 'url'=>array('admin')),
);
?>

<h1>P  Ticket Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
