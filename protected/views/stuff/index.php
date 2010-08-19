<?php
$this->breadcrumbs=array(
	'Stuffs',
);

$this->menu=array(
	array('label'=>'Create Stuff', 'url'=>array('create')),
	array('label'=>'Manage Stuff', 'url'=>array('admin')),
);
?>

<h1>Stuff</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
