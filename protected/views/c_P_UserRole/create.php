<?php
/* @var $this C_P_UserRoleController */
/* @var $model P_UserRole */

$this->breadcrumbs=array(
	'P  User Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_UserRole', 'url'=>array('index')),
	array('label'=>'Manage P_UserRole', 'url'=>array('admin')),
);
?>

<h1>Create P_UserRole</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>