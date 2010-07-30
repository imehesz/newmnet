<?php
$this->breadcrumbs=array(
	'Feeds',
);

$this->menu=array(
	array('label'=>'Create Feed', 'url'=>array('create')),
	array('label'=>'Manage Feed', 'url'=>array('admin')),
);
?>

<h1>Feeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
