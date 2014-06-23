<?php
/* @var $this C_P_CategoryController */
/* @var $model P_Category */

$this->breadcrumbs=array(
	'P  Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_Category', 'url'=>array('index')),
	array('label'=>'Create P_Category', 'url'=>array('create')),
	array('label'=>'View P_Category', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_Category', 'url'=>array('admin')),
);
?>

<h1>Update P_Category <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>