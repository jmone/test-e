<?php
$this->breadcrumbs=array(
	'Live Positions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LivePosition', 'url'=>array('index')),
	array('label'=>'Create LivePosition', 'url'=>array('create')),
	array('label'=>'View LivePosition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LivePosition', 'url'=>array('admin')),
);
?>

<h1>Update LivePosition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>