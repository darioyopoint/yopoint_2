<?php
/* @var $this C_P_CategoryController */
/* @var $model P_Category */

$this->breadcrumbs=array(
	'P  Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List P_Category', 'url'=>array('index')),
	array('label'=>'Create P_Category', 'url'=>array('create')),
	array('label'=>'Update P_Category', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_Category', 'url'=>array('admin')),
);
?>

<h1>View P_Category #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'tags',
		'logo_path',
		'rgba_color',
	),
)); ?>
