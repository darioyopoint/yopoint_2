<?php
/* @var $this C_P_PaymentTypeController */
/* @var $model P_PaymentType */

$this->breadcrumbs=array(
	'P  Payment Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_PaymentType', 'url'=>array('index')),
	array('label'=>'Create P_PaymentType', 'url'=>array('create')),
	array('label'=>'View P_PaymentType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_PaymentType', 'url'=>array('admin')),
);
?>

<h1>Update P_PaymentType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>