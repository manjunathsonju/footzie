<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'players_name'); ?>
		<?php echo $form->textField($model,'players_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_id'); ?>
		<?php echo $form->textField($model,'team_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_price'); ?>
		<?php echo $form->textField($model,'curr_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_status'); ?>
		<?php echo $form->textField($model,'curr_status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_goals'); ?>
		<?php echo $form->textField($model,'total_goals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_appearance'); ?>
		<?php echo $form->textField($model,'total_appearance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_avg_rating'); ?>
		<?php echo $form->textField($model,'curr_avg_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'player_key'); ?>
		<?php echo $form->textField($model,'player_key',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_profit_pct'); ?>
		<?php echo $form->textField($model,'curr_profit_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_profit'); ?>
		<?php echo $form->textField($model,'curr_profit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->