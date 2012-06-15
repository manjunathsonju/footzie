<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('players_name')); ?>:</b>
	<?php echo CHtml::encode($data->players_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?>:</b>
	<?php echo CHtml::encode($data->team_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_price')); ?>:</b>
	<?php echo CHtml::encode($data->curr_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_status')); ?>:</b>
	<?php echo CHtml::encode($data->curr_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_goals')); ?>:</b>
	<?php echo CHtml::encode($data->total_goals); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_appearance')); ?>:</b>
	<?php echo CHtml::encode($data->total_appearance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_avg_rating')); ?>:</b>
	<?php echo CHtml::encode($data->curr_avg_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('player_key')); ?>:</b>
	<?php echo CHtml::encode($data->player_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_profit_pct')); ?>:</b>
	<?php echo CHtml::encode($data->curr_profit_pct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_profit')); ?>:</b>
	<?php echo CHtml::encode($data->curr_profit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>