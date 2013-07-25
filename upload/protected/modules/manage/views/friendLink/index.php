<?php
$this->breadcrumbs=array(
	'Live Friend Links',
);

$this->menu=array(
	array('label'=>'Create LiveFriendLink', 'url'=>array('create')),
	array('label'=>'Manage LiveFriendLink', 'url'=>array('admin')),
);
?>

<h1>Live Friend Links</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
