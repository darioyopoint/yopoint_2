<?php
/* @var $this C_P_TopUpController */
/* @var $model P_TopUp */

$this->breadcrumbs=array(
	'P  Top Ups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_TopUp', 'url'=>array('index')),
	array('label'=>'Create P_TopUp', 'url'=>array('create')),
	array('label'=>'Update P_TopUp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_TopUp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_TopUp', 'url'=>array('admin')),
);
?>

<h1>View P_TopUp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'amount',
		'reward',
	),
)); ?>
