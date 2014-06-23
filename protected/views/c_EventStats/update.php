<?php
/* @var $this C_EventStatsController */
/* @var $model EventStats */

$this->breadcrumbs=array(
	'Event Stats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventStats', 'url'=>array('index')),
	array('label'=>'Create EventStats', 'url'=>array('create')),
	array('label'=>'View EventStats', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventStats', 'url'=>array('admin')),
);
?>

<h1>Update EventStats <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>