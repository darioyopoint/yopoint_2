<?php
/* @var $this C_P_CardTypeController */
/* @var $model P_CardType */

$this->breadcrumbs=array(
	'P  Card Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P_CardType', 'url'=>array('index')),
	array('label'=>'Create P_CardType', 'url'=>array('create')),
	array('label'=>'View P_CardType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P_CardType', 'url'=>array('admin')),
);
?>

<h1>Update P_CardType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>