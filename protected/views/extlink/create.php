<?php
$this->breadcrumbs=array(
	'Extlinks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Extlink', 'url'=>array('index')),
	array('label'=>'Manage Extlink', 'url'=>array('admin')),
);
?>

<h1>Create Extlink</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>