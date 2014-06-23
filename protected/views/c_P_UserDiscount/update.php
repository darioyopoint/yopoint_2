<?php
/* @var $this C_P_UserDiscountController */
/* @var $model P_UserDiscount */

$this->breadcrumbs=array(
	'P  User Discounts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_UserDiscount', 'url'=>array('index')),
	array('label'=>'Create P_UserDiscount', 'url'=>array('create')),
	array('label'=>'View P_UserDiscount', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_UserDiscount', 'url'=>array('admin')),
);
?>

<h1>Update P_UserDiscount <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>