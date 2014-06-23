<?php
/* @var $this C_P_UserTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  User Types',
);

$this->menu=array(
	array('label'=>'Create P_UserType', 'url'=>array('create')),
	array('label'=>'Manage P_UserType', 'url'=>array('admin')),
);
?>

<h1>P  User Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
