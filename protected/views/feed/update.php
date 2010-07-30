<?php
$this->breadcrumbs=array(
	'Feeds'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feed', 'url'=>array('index')),
	array('label'=>'Create Feed', 'url'=>array('create')),
	array('label'=>'View Feed', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Feed', 'url'=>array('admin')),
);
?>

<h1>Update Feed <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>