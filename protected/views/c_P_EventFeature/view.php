<?php
/* @var $this C_P_EventFeatureController */
/* @var $model P_EventFeature */

$this->breadcrumbs=array(
	'P  Event Features'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P_EventFeature', 'url'=>array('index')),
	array('label'=>'Create P_EventFeature', 'url'=>array('create')),
	array('label'=>'Update P_EventFeature', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P_EventFeature', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P_EventFeature', 'url'=>array('admin')),
);
?>

<h1>View P_EventFeature #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'logo',
	),
)); ?>
