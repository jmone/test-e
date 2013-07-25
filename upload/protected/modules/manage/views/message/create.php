<?php
$this->breadcrumbs=array(
	'Live Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveMessage', 'url'=>array('index')),
	array('label'=>'Manage LiveMessage', 'url'=>array('admin')),
);
?>

<h1>Create LiveMessage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>