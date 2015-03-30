<?php
/* @var $this EventionController */
/* @var $model Evention */

$this->breadcrumbs=array(
	'Eventions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Evention', 'url'=>array('index')),
	array('label'=>'Manage Evention', 'url'=>array('admin')),
);
?>

<h1>Create Evention</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>