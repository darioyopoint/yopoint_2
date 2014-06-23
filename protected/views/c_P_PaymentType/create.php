<?php
/* @var $this C_P_PaymentTypeController */
/* @var $model P_PaymentType */

$this->breadcrumbs=array(
	'P  Payment Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_PaymentType', 'url'=>array('index')),
	array('label'=>'Manage P_PaymentType', 'url'=>array('admin')),
);
?>

<h1>Create P_PaymentType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>