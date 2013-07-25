<?php
$this->breadcrumbs=array(
	'Live Users',
);

$this->menu=array(
	array('label'=>'Create LiveUser', 'url'=>array('create')),
	array('label'=>'Manage LiveUser', 'url'=>array('admin')),
);
?>

<h1>Live Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
