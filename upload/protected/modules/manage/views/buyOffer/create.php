<?php
$this->breadcrumbs=array(
	'Live Buy Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveBuyOffer', 'url'=>array('index')),
	array('label'=>'Manage LiveBuyOffer', 'url'=>array('admin')),
);
?>

<h1>Create LiveBuyOffer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>