<?php
$this->breadcrumbs=array(
	'Extlinks',
);

$this->menu=array(
	array('label'=>'Create Extlink', 'url'=>array('create')),
	array('label'=>'Manage Extlink', 'url'=>array('admin')),
);
?>

<h1>Extlinks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
