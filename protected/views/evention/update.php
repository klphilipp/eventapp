<?php
/* @var $this EventionController */
/* @var $model Evention */

$this->breadcrumbs=array(
	'Eventions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Evention', 'url'=>array('index')),
	array('label'=>'Create Evention', 'url'=>array('create')),
	array('label'=>'View Evention', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Evention', 'url'=>array('admin')),
);
?>

<h1>Update Evention <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>