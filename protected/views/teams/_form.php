<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teams-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team_name'); ?>
		<?php echo $form->textField($model,'team_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'team_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jersey_image'); ?>
		<?php echo $form->textField($model,'jersey_image',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'jersey_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'udf1'); ?>
		<?php echo $form->textField($model,'udf1',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'udf1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'udf2'); ?>
		<?php echo $form->textField($model,'udf2',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'udf2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->