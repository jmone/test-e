<?php
$this->breadcrumbs=array(
	'Live Exhibitions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LiveExhibition', 'url'=>array('index')),
	array('label'=>'Create LiveExhibition', 'url'=>array('create')),
	array('label'=>'Update LiveExhibition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveExhibition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveExhibition', 'url'=>array('admin')),
);
?>

<h1>View LiveExhibition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'name',
		'address',
		'description',
		'start_date',
		'expiration_date',
		'dateline',
	),
)); ?>
