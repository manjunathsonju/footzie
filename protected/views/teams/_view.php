<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_name')); ?>:</b>
	<?php echo CHtml::encode($data->team_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jersey_image')); ?>:</b>
	<?php echo CHtml::encode($data->jersey_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('udf1')); ?>:</b>
	<?php echo CHtml::encode($data->udf1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('udf2')); ?>:</b>
	<?php echo CHtml::encode($data->udf2); ?>
	<br />


</div>