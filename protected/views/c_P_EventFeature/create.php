<?php
/* @var $this C_P_EventFeatureController */
/* @var $model P_EventFeature */

$this->breadcrumbs=array(
	'P  Event Features'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_EventFeature', 'url'=>array('index')),
	array('label'=>'Manage P_EventFeature', 'url'=>array('admin')),
);
?>

<h1>Create P_EventFeature</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>