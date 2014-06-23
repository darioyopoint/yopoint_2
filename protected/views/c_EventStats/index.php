<?php
/* @var $this C_EventStatsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Stats',
);

$this->menu=array(
	array('label'=>'Create EventStats', 'url'=>array('create')),
	array('label'=>'Manage EventStats', 'url'=>array('admin')),
);
?>

<h1>Event Stats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
