<?php
/* @var $this C_P_TopUpController */
/* @var $model P_TopUp */

$this->breadcrumbs=array(
	'P  Top Ups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_TopUp', 'url'=>array('index')),
	array('label'=>'Create P_TopUp', 'url'=>array('create')),
	array('label'=>'View P_TopUp', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_TopUp', 'url'=>array('admin')),
);
?>

<h1>Update P_TopUp <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>