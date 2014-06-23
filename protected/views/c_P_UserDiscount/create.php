<?php
/* @var $this C_P_UserDiscountController */
/* @var $model P_UserDiscount */

$this->breadcrumbs=array(
	'P  User Discounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_UserDiscount', 'url'=>array('index')),
	array('label'=>'Manage P_UserDiscount', 'url'=>array('admin')),
);
?>

<h1>Create P_UserDiscount</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>