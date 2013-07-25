<?php
$this->breadcrumbs=array(
	'Live Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LiveUser', 'url'=>array('index')),
	array('label'=>'Create LiveUser', 'url'=>array('create')),
	array('label'=>'Update LiveUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveUser', 'url'=>array('admin')),
);
?>

<h1>View LiveUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'email',
		'password',
		'dateline',
	),
)); ?>
