<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'players-profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'players_name'); ?>
		<?php echo $form->textField($model,'players_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'players_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_id'); ?>
		<?php echo $form->textField($model,'team_id'); ?>
		<?php echo $form->error($model,'team_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_price'); ?>
		<?php echo $form->textField($model,'curr_price'); ?>
		<?php echo $form->error($model,'curr_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_status'); ?>
		<?php echo $form->textField($model,'curr_status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'curr_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_goals'); ?>
		<?php echo $form->textField($model,'total_goals'); ?>
		<?php echo $form->error($model,'total_goals'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_appearance'); ?>
		<?php echo $form->textField($model,'total_appearance'); ?>
		<?php echo $form->error($model,'total_appearance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_avg_rating'); ?>
		<?php echo $form->textField($model,'curr_avg_rating'); ?>
		<?php echo $form->error($model,'curr_avg_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'player_key'); ?>
		<?php echo $form->textField($model,'player_key',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'player_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_profit_pct'); ?>
		<?php echo $form->textField($model,'curr_profit_pct'); ?>
		<?php echo $form->error($model,'curr_profit_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_profit'); ?>
		<?php echo $form->textField($model,'curr_profit'); ?>
		<?php echo $form->error($model,'curr_profit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->