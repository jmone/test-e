<?php
$this->breadcrumbs=array(
	'Live Positions',
);

$this->menu=array(
	array('label'=>'Create LivePosition', 'url'=>array('create')),
	array('label'=>'Manage LivePosition', 'url'=>array('admin')),
);
?>

<h1>Live Positions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
