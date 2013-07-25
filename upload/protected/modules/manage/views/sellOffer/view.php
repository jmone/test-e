<?php
$this->breadcrumbs=array(
	'Live Sell Offers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LiveSellOffer', 'url'=>array('index')),
	array('label'=>'Create LiveSellOffer', 'url'=>array('create')),
	array('label'=>'Update LiveSellOffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveSellOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveSellOffer', 'url'=>array('admin')),
);
?>

<h1>View LiveSellOffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'name',
		'picture',
		'description',
		'amount',
		'price',
		'dateline',
	),
)); ?>
