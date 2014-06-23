<?php
/* @var $this C_P_UserDiscountController */
/* @var $model P_UserDiscount */

$this->breadcrumbs=array(
	'P  User Discounts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List P_UserDiscount', 'url'=>array('index')),
	array('label'=>'Create P_UserDiscount', 'url'=>array('create')),
	array('label'=>'Update P_UserDiscount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_UserDiscount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_UserDiscount', 'url'=>array('admin')),
);
?>

<h1>View P_UserDiscount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'percentage',
	),
)); ?>
