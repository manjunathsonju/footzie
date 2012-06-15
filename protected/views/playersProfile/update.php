<?php
$this->breadcrumbs=array(
	'Players Profiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlayersProfile', 'url'=>array('index')),
	array('label'=>'Create PlayersProfile', 'url'=>array('create')),
	array('label'=>'View PlayersProfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PlayersProfile', 'url'=>array('admin')),
);
?>

<h1>Update PlayersProfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>