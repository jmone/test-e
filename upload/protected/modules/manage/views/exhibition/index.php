<?php
$this->breadcrumbs=array(
	'Live Exhibitions',
);

$this->menu=array(
	array('label'=>'Create LiveExhibition', 'url'=>array('create')),
	array('label'=>'Manage LiveExhibition', 'url'=>array('admin')),
);
?>

<h1>Live Exhibitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
