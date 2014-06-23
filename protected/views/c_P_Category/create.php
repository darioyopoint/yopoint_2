<?php
/* @var $this C_P_CategoryController */
/* @var $model P_Category */

$this->breadcrumbs=array(
	'P  Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_Category', 'url'=>array('index')),
	array('label'=>'Manage P_Category', 'url'=>array('admin')),
);
?>

<h1>Create P_Category</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>