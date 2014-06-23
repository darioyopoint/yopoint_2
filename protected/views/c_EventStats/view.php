<?php
/* @var $this C_EventStatsController */
/* @var $model EventStats */

$this->breadcrumbs=array(
	'Event Stats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventStats', 'url'=>array('index')),
	array('label'=>'Create EventStats', 'url'=>array('create')),
	array('label'=>'Update EventStats', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventStats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventStats', 'url'=>array('admin')),
);
?>

<h1>View EventStats #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'view_counter',
		'purchase_counter',
		'like_counter',
		'comment_counter',
		'share_counter',
		'fk_event_related',
	),
)); ?>
