<?php
$this->breadcrumbs=array(
	'Feeds'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Feed', 'url'=>array('index')),
	array('label'=>'Create Feed', 'url'=>array('create')),
	array('label'=>'Update Feed', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Feed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feed', 'url'=>array('admin')),
);
?>

<h1>View Feed #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'created',
		'deleted',
		'id',
		'name',
		'url',
		'weight',
	),
)); ?>
