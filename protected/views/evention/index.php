<?php
/* @var $this EventionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventions',
);

$this->menu=array(
	array('label'=>'Create Evention', 'url'=>array('create')),
	array('label'=>'Manage Evention', 'url'=>array('admin')),
);
?>

<h1>Eventions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
