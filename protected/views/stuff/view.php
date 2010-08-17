<?php
$this->breadcrumbs=array(
	'Stuffs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Stuff', 'url'=>array('index')),
	array('label'=>'Create Stuff', 'url'=>array('create')),
	array('label'=>'Update Stuff', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stuff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stuff', 'url'=>array('admin')),
);
?>

<h1>View Stuff #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'deleted',
		'description',
		'extlink',
		'id',
		'inblock',
		'name',
		'weight',
	),
)); ?>
