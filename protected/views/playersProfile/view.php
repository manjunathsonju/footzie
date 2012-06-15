<?php
$this->breadcrumbs=array(
	'Players Profiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PlayersProfile', 'url'=>array('index')),
	array('label'=>'Create PlayersProfile', 'url'=>array('create')),
	array('label'=>'Update PlayersProfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PlayersProfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlayersProfile', 'url'=>array('admin')),
);
?>

<h1>View PlayersProfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'players_name',
		'team_id',
		'position',
		'curr_price',
		'curr_status',
		'total_goals',
		'total_appearance',
		'curr_avg_rating',
		'player_key',
		'status',
		'curr_profit_pct',
		'curr_profit',
		'description',
	),
)); ?>
