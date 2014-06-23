<?php
/* @var $this C_P_UserTypeController */
/* @var $model P_UserType */

$this->breadcrumbs=array(
	'P  User Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_UserType', 'url'=>array('index')),
	array('label'=>'Create P_UserType', 'url'=>array('create')),
	array('label'=>'Update P_UserType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_UserType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_UserType', 'url'=>array('admin')),
);
?>

<h1>View P_UserType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
