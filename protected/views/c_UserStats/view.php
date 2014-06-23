<?php
/* @var $this C_UserStatsController */
/* @var $model UserStats */

$this->breadcrumbs=array(
	'User Stats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserStats', 'url'=>array('index')),
	array('label'=>'Create UserStats', 'url'=>array('create')),
	array('label'=>'Update UserStats', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserStats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserStats', 'url'=>array('admin')),
);
?>

<h1>View UserStats #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'like',
		'comment',
		'share',
		'view_counter',
		'purchase_counter',
		'fk_event_number',
		'fk_user_number',
	),
)); ?>
