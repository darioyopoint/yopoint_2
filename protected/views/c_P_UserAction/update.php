<?php
/* @var $this C_P_UserActionController */
/* @var $model P_UserAction */

$this->breadcrumbs=array(
	'P  User Actions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_UserAction', 'url'=>array('index')),
	array('label'=>'Create P_UserAction', 'url'=>array('create')),
	array('label'=>'View P_UserAction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_UserAction', 'url'=>array('admin')),
);
?>

<h1>Update P_UserAction <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>