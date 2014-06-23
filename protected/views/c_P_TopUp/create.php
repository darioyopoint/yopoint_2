<?php
/* @var $this C_P_TopUpController */
/* @var $model P_TopUp */

$this->breadcrumbs=array(
	'P  Top Ups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_TopUp', 'url'=>array('index')),
	array('label'=>'Manage P_TopUp', 'url'=>array('admin')),
);
?>

<h1>Create P_TopUp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>