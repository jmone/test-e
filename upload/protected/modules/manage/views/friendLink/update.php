<?php
$this->breadcrumbs=array(
	'Live Friend Links'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveFriendLink', 'url'=>array('index')),
	array('label'=>'Create LiveFriendLink', 'url'=>array('create')),
	array('label'=>'View LiveFriendLink', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveFriendLink', 'url'=>array('admin')),
);
?>

<h1>Update LiveFriendLink <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>