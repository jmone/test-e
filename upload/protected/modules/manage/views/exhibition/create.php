<?php
$this->breadcrumbs=array(
	'Live Exhibitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveExhibition', 'url'=>array('index')),
	array('label'=>'Manage LiveExhibition', 'url'=>array('admin')),
);
?>

<h1>Create LiveExhibition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>