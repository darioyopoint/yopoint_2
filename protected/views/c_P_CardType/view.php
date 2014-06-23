<?php
/* @var $this C_P_CardTypeController */
/* @var $model P_CardType */

$this->breadcrumbs=array(
	'P  Card Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_CardType', 'url'=>array('index')),
	array('label'=>'Create P_CardType', 'url'=>array('create')),
	array('label'=>'Update P_CardType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_CardType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_CardType', 'url'=>array('admin')),
);
?>

<h1>View P_CardType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
