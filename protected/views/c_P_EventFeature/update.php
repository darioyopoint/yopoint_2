<?php
/* @var $this C_P_EventFeatureController */
/* @var $model P_EventFeature */

$this->breadcrumbs=array(
	'P  Event Features'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_EventFeature', 'url'=>array('index')),
	array('label'=>'Create P_EventFeature', 'url'=>array('create')),
	array('label'=>'View P_EventFeature', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_EventFeature', 'url'=>array('admin')),
);
?>

<h1>Update P_EventFeature <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>