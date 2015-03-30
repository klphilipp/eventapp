<?php
/* @var $this EventionController */
/* @var $model Evention */

$this->breadcrumbs=array(
	'Eventions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Evention', 'url'=>array('index')),
	array('label'=>'Create Evention', 'url'=>array('create')),
	array('label'=>'Update Evention', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Evention', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Evention', 'url'=>array('admin')),
);
?>

<h1>View Evention #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'place',
		'datetime',
		'visitors',
		'passcode',
		'userid',
	),
)); ?>
