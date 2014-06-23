<?php
/* @var $this C_P_EventFeatureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Event Features',
);

$this->menu=array(
	array('label'=>'Create P_EventFeature', 'url'=>array('create')),
	array('label'=>'Manage P_EventFeature', 'url'=>array('admin')),
);
?>

<h1>P  Event Features</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
