<?php
/* @var $this C_P_PaymentTypeController */
/* @var $model P_PaymentType */

$this->breadcrumbs=array(
	'P  Payment Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_PaymentType', 'url'=>array('index')),
	array('label'=>'Create P_PaymentType', 'url'=>array('create')),
	array('label'=>'Update P_PaymentType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_PaymentType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_PaymentType', 'url'=>array('admin')),
);
?>

<h1>View P_PaymentType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
