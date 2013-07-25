<?php
$this->breadcrumbs=array(
	'Live Messages'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LiveMessage', 'url'=>array('index')),
	array('label'=>'Create LiveMessage', 'url'=>array('create')),
	array('label'=>'Update LiveMessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveMessage', 'url'=>array('admin')),
);
?>

<h1>View LiveMessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'from_uid',
		'to_uid',
		'title',
		'content',
		'dateline',
	),
)); ?>
