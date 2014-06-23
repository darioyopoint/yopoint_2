<?php
/* @var $this C_UserStatsController */
/* @var $model UserStats */

$this->breadcrumbs=array(
	'User Stats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserStats', 'url'=>array('index')),
	array('label'=>'Manage UserStats', 'url'=>array('admin')),
);
?>

<h1>Create UserStats</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>