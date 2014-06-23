<?php
/* @var $this C_P_UserDiscountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  User Discounts',
);

$this->menu=array(
	array('label'=>'Create P_UserDiscount', 'url'=>array('create')),
	array('label'=>'Manage P_UserDiscount', 'url'=>array('admin')),
);
?>

<h1>P  User Discounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
