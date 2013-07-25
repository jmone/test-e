<?php
$this->breadcrumbs=array(
	'Live Friend Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveFriendLink', 'url'=>array('index')),
	array('label'=>'Manage LiveFriendLink', 'url'=>array('admin')),
);
?>

<h1>Create LiveFriendLink</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>