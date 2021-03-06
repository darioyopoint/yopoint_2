<?php
/* @var $this C_CardController */
/* @var $model Card */

$this->breadcrumbs=array(
	'Cards'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Card', 'url'=>array('index')),
	array('label'=>'Create Card', 'url'=>array('create')),
	array('label'=>'Update Card', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Card', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Card', 'url'=>array('admin')),
);
?>

<h1>View Card #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner',
		'number',
		'expire_date',
		'start_date',
		'fk_card_user',
		'fk_card_type',
	),
)); ?>
