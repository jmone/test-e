<?php
$this->breadcrumbs=array(
	'Live Buy Offers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LiveBuyOffer', 'url'=>array('index')),
	array('label'=>'Create LiveBuyOffer', 'url'=>array('create')),
	array('label'=>'Update LiveBuyOffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveBuyOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveBuyOffer', 'url'=>array('admin')),
);
?>

<h1>View LiveBuyOffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'name',
		'message',
		'count',
		'expiration_date',
		'dateline',
	),
)); ?>
