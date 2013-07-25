<?php
$this->breadcrumbs=array(
	'Live Positions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LivePosition', 'url'=>array('index')),
	array('label'=>'Create LivePosition', 'url'=>array('create')),
	array('label'=>'Update LivePosition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LivePosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LivePosition', 'url'=>array('admin')),
);
?>

<h1>View LivePosition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'name',
		'description',
		'count',
		'expiration_date',
		'dateline',
	),
)); ?>
