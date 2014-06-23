<?php
/* @var $this C_P_UserActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  User Actions',
);

$this->menu=array(
	array('label'=>'Create P_UserAction', 'url'=>array('create')),
	array('label'=>'Manage P_UserAction', 'url'=>array('admin')),
);
?>

<h1>P  User Actions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
