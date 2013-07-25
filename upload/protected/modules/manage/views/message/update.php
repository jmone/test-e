<?php
$this->breadcrumbs=array(
	'Live Messages'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveMessage', 'url'=>array('index')),
	array('label'=>'Create LiveMessage', 'url'=>array('create')),
	array('label'=>'View LiveMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveMessage', 'url'=>array('admin')),
);
?>

<h1>Update LiveMessage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>