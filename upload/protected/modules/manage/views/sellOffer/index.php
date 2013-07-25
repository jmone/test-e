<?php
$this->breadcrumbs=array(
	'Live Sell Offers',
);

$this->menu=array(
	array('label'=>'Create LiveSellOffer', 'url'=>array('create')),
	array('label'=>'Manage LiveSellOffer', 'url'=>array('admin')),
);
?>

<h1>Live Sell Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
