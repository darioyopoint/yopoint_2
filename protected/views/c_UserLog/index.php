<?php
/* @var $this C_UserLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Logs',
);

$this->menu=array(
	array('label'=>'Create UserLog', 'url'=>array('create')),
	array('label'=>'Manage UserLog', 'url'=>array('admin')),
);
?>

<h1>User Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
