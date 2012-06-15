<?php
$this->breadcrumbs=array(
	'Players Profiles',
);

$this->menu=array(
	array('label'=>'Create PlayersProfile', 'url'=>array('create')),
	array('label'=>'Manage PlayersProfile', 'url'=>array('admin')),
);
?>

<h1>Players Profiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
