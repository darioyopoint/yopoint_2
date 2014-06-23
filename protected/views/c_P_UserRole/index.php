<?php
/* @var $this C_P_UserRoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  User Roles',
);

$this->menu=array(
	array('label'=>'Create P_UserRole', 'url'=>array('create')),
	array('label'=>'Manage P_UserRole', 'url'=>array('admin')),
);
?>

<h1>P  User Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
