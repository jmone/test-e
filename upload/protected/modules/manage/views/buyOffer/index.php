<?php
$this->breadcrumbs=array(
	'Live Buy Offers',
);

$this->menu=array(
	array('label'=>'Create LiveBuyOffer', 'url'=>array('create')),
	array('label'=>'Manage LiveBuyOffer', 'url'=>array('admin')),
);
?>

<h1>Live Buy Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
