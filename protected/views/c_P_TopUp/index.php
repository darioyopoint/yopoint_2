<?php
/* @var $this C_P_TopUpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Top Ups',
);

$this->menu=array(
	array('label'=>'Create P_TopUp', 'url'=>array('create')),
	array('label'=>'Manage P_TopUp', 'url'=>array('admin')),
);
?>

<h1>P  Top Ups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
