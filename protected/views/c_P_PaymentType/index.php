<?php
/* @var $this C_P_PaymentTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Payment Types',
);

$this->menu=array(
	array('label'=>'Create P_PaymentType', 'url'=>array('create')),
	array('label'=>'Manage P_PaymentType', 'url'=>array('admin')),
);
?>

<h1>P  Payment Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
