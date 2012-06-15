<?php
$this->breadcrumbs=array(
	'Players Profiles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PlayersProfile', 'url'=>array('index')),
	array('label'=>'Create PlayersProfile', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('players-profile-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Players Profiles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'players-profile-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'players_name',
		'team_id',
		'position',
		'curr_price',
		'curr_status',
		/*
		'total_goals',
		'total_appearance',
		'curr_avg_rating',
		'player_key',
		'status',
		'curr_profit_pct',
		'curr_profit',
		'description',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
