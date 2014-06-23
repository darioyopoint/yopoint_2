<?php
/* @var $this C_EventStatsController */
/* @var $model EventStats */

$this->breadcrumbs=array(
	'Event Stats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventStats', 'url'=>array('index')),
	array('label'=>'Manage EventStats', 'url'=>array('admin')),
);
?>

<h1>Create EventStats</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>