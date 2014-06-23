<?php
/* @var $this C_P_CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P  Categories',
);

$this->menu=array(
	array('label'=>'Create P_Category', 'url'=>array('create')),
	array('label'=>'Manage P_Category', 'url'=>array('admin')),
);
?>

<h1>P  Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
