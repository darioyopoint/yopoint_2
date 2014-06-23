<?php
/* @var $this C_P_UserRoleController */
/* @var $model P_UserRole */

$this->breadcrumbs=array(
	'P  User Roles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_UserRole', 'url'=>array('index')),
	array('label'=>'Create P_UserRole', 'url'=>array('create')),
	array('label'=>'View P_UserRole', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_UserRole', 'url'=>array('admin')),
);
?>

<h1>Update P_UserRole <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>