<?php
/* @var $this C_UserStatsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Stats',
);

$this->menu=array(
	array('label'=>'Create UserStats', 'url'=>array('create')),
	array('label'=>'Manage UserStats', 'url'=>array('admin')),
);
?>

<h1>User Stats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
