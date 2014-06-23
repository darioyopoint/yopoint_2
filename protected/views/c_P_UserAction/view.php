<?php
/* @var $this C_P_UserActionController */
/* @var $model P_UserAction */

$this->breadcrumbs=array(
	'P  User Actions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_UserAction', 'url'=>array('index')),
	array('label'=>'Create P_UserAction', 'url'=>array('create')),
	array('label'=>'Update P_UserAction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_UserAction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_UserAction', 'url'=>array('admin')),
);
?>

<h1>View P_UserAction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'reward',
		'amount',
	),
)); ?>
