<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Squad Selection");
$this->breadcrumbs=array(
	UserModule::t("Squad Selection"),
);
?>

<h1><?php echo UserModule::t("Squad Selection"); ?></h1>

<?php if(Yii::app()->user->hasFlash('squad')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('squad'); ?>
</div>
<?php else: ?>

<div class="form">
<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'Squad-form',
	'enableAjaxValidation'=>true,
    
    'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'squad_name'); ?>
	<?php echo $form->textField($model,'squad_name'); ?>
	<?php echo $form->error($model,'squad_name'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'status'); ?>
	<?php echo $form->textField($model,'status'); ?>
	<?php echo $form->error($model,'status'); ?>
	</div>
	
	
	
	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Register")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<?php endif; ?>