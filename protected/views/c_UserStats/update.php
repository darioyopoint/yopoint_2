<?php
/* @var $this C_UserStatsController */
/* @var $model UserStats */

$this->breadcrumbs=array(
	'User Stats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserStats', 'url'=>array('index')),
	array('label'=>'Create UserStats', 'url'=>array('create')),
	array('label'=>'View UserStats', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserStats', 'url'=>array('admin')),
);
?>

<h1>Update UserStats <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>