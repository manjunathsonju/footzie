<?php
$this->breadcrumbs=array(
	'Players Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlayersProfile', 'url'=>array('index')),
	array('label'=>'Manage PlayersProfile', 'url'=>array('admin')),
);
?>

<h1>Create PlayersProfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>