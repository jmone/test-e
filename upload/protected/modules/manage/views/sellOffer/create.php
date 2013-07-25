<?php
$this->breadcrumbs=array(
	'Live Sell Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveSellOffer', 'url'=>array('index')),
	array('label'=>'Manage LiveSellOffer', 'url'=>array('admin')),
);
?>

<h1>Create LiveSellOffer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>