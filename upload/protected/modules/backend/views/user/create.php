<?php
$this->breadcrumbs=array(
	'Live Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveUser', 'url'=>array('index')),
	array('label'=>'Manage LiveUser', 'url'=>array('admin')),
);
?>

<h1>Create LiveUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>