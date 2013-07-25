<?php
$this->breadcrumbs=array(
	'Live News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveNews', 'url'=>array('index')),
	array('label'=>'Manage LiveNews', 'url'=>array('admin')),
);
?>

<h1>Create LiveNews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>