<?php
$this->breadcrumbs=array(
	'Live Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LivePosition', 'url'=>array('index')),
	array('label'=>'Manage LivePosition', 'url'=>array('admin')),
);
?>

<h1>Create LivePosition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>