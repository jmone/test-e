<?php
$this->breadcrumbs=array(
	'Live News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LiveNews', 'url'=>array('index')),
	array('label'=>'Create LiveNews', 'url'=>array('create')),
	array('label'=>'Update LiveNews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveNews', 'url'=>array('admin')),
);
?>

<h1>View LiveNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'title',
		'description',
		'content',
		'dateline',
	),
)); ?>
