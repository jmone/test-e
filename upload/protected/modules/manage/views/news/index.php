<?php
$this->breadcrumbs=array(
	'Live News',
);

$this->menu=array(
	array('label'=>'Create LiveNews', 'url'=>array('create')),
	array('label'=>'Manage LiveNews', 'url'=>array('admin')),
);
?>

<h1>Live News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
