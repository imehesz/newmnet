<?php
$this->breadcrumbs=array(
	'Extlinks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Extlink', 'url'=>array('index')),
	array('label'=>'Create Extlink', 'url'=>array('create')),
	array('label'=>'Update Extlink', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Extlink', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Extlink', 'url'=>array('admin')),
);
?>

<h1>View Extlink #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'label',
		'weight',
	),
)); ?>
