<?php
$this->breadcrumbs=array(
	'Live Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveUser', 'url'=>array('index')),
	array('label'=>'Create LiveUser', 'url'=>array('create')),
	array('label'=>'View LiveUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveUser', 'url'=>array('admin')),
);
?>

<h1>Update LiveUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>