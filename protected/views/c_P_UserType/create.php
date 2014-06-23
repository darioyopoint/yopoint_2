<?php
/* @var $this C_P_UserTypeController */
/* @var $model P_UserType */

$this->breadcrumbs=array(
	'P  User Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_UserType', 'url'=>array('index')),
	array('label'=>'Manage P_UserType', 'url'=>array('admin')),
);
?>

<h1>Create P_UserType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>