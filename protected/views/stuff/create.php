<?php
$this->breadcrumbs=array(
	'Stuffs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stuff', 'url'=>array('index')),
	array('label'=>'Manage Stuff', 'url'=>array('admin')),
);
?>

<h1>Create Stuff</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>