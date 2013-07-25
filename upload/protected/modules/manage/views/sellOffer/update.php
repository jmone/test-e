<?php
$this->breadcrumbs=array(
	'Live Sell Offers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveSellOffer', 'url'=>array('index')),
	array('label'=>'Create LiveSellOffer', 'url'=>array('create')),
	array('label'=>'View LiveSellOffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveSellOffer', 'url'=>array('admin')),
);
?>

<h1>Update LiveSellOffer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>