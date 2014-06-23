<?php
/* @var $this C_UserLogController */
/* @var $model UserLog */

$this->breadcrumbs=array(
	'User Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserLog', 'url'=>array('index')),
	array('label'=>'Create UserLog', 'url'=>array('create')),
	array('label'=>'Update UserLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserLog', 'url'=>array('admin')),
);
?>

<h1>View UserLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'datetime',
		'fk_user',
		'fk_user_action',
	),
)); ?>
