<?php
/* @var $this C_P_CardTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Card Types',
);

$this->menu=array(
	array('label'=>'Create P_CardType', 'url'=>array('create')),
	array('label'=>'Manage P_CardType', 'url'=>array('admin')),
);
?>

<h1>P  Card Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
