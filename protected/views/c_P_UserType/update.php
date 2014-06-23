<?php
/* @var $this C_P_UserTypeController */
/* @var $model P_UserType */

$this->breadcrumbs=array(
	'P  User Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_UserType', 'url'=>array('index')),
	array('label'=>'Create P_UserType', 'url'=>array('create')),
	array('label'=>'View P_UserType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_UserType', 'url'=>array('admin')),
);
?>

<h1>Update P_UserType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>