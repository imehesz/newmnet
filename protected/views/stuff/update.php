<?php
$this->breadcrumbs=array(
	'Stuffs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stuff', 'url'=>array('index')),
	array('label'=>'Create Stuff', 'url'=>array('create')),
	array('label'=>'View Stuff', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stuff', 'url'=>array('admin')),
);
?>

<h1>Update Stuff <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>