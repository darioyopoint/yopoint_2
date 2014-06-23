<?php
/* @var $this C_P_CardTypeController */
/* @var $model P_CardType */

$this->breadcrumbs=array(
	'P  Card Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P_CardType', 'url'=>array('index')),
	array('label'=>'Manage P_CardType', 'url'=>array('admin')),
);
?>

<h1>Create P_CardType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>