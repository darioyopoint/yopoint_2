<?php
/* @var $this C_P_UserActionController */
/* @var $model P_UserAction */

$this->breadcrumbs=array(
	'P  User Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_UserAction', 'url'=>array('index')),
	array('label'=>'Manage P_UserAction', 'url'=>array('admin')),
);
?>

<h1>Create P_UserAction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>