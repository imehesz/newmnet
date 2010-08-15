<?php
$this->breadcrumbs=array(
	'Extlinks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Extlink', 'url'=>array('index')),
	array('label'=>'Create Extlink', 'url'=>array('create')),
	array('label'=>'View Extlink', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Extlink', 'url'=>array('admin')),
);
?>

<h1>Update Extlink <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>