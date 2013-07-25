<?php
$this->breadcrumbs=array(
	'Live News'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveNews', 'url'=>array('index')),
	array('label'=>'Create LiveNews', 'url'=>array('create')),
	array('label'=>'View LiveNews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveNews', 'url'=>array('admin')),
);
?>

<h1>Update LiveNews <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>