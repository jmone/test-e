<?php
$this->breadcrumbs=array(
	'Live Messages',
);

$this->menu=array(
	array('label'=>'Create LiveMessage', 'url'=>array('create')),
	array('label'=>'Manage LiveMessage', 'url'=>array('admin')),
);
?>

<h1>Live Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
