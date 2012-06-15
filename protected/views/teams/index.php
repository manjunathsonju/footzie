<?php
$this->breadcrumbs=array(
	'Teams',
);

$this->menu=array(
	array('label'=>'Create Teams', 'url'=>array('create')),
	array('label'=>'Manage Teams', 'url'=>array('admin')),
);
?>

<h1>Teams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
