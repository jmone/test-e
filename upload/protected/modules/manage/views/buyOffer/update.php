<?php
$this->breadcrumbs=array(
	'Live Buy Offers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveBuyOffer', 'url'=>array('index')),
	array('label'=>'Create LiveBuyOffer', 'url'=>array('create')),
	array('label'=>'View LiveBuyOffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveBuyOffer', 'url'=>array('admin')),
);
?>

<h1>Update LiveBuyOffer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>