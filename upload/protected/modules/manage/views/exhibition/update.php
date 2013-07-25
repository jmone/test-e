<?php
$this->breadcrumbs=array(
	'Live Exhibitions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveExhibition', 'url'=>array('index')),
	array('label'=>'Create LiveExhibition', 'url'=>array('create')),
	array('label'=>'View LiveExhibition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveExhibition', 'url'=>array('admin')),
);
?>

<h1>Update LiveExhibition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>