<?php
$this->breadcrumbs=array(
	'Feeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feed', 'url'=>array('index')),
	array('label'=>'Manage Feed', 'url'=>array('admin')),
);
?>

<h1>Create Feed</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>