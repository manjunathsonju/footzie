<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<h1><?php echo UserModule::t("Login"); ?></h1>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<div class="form">
<?php $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well form-horizontal form-inline'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row-new">
		<?php echo CHtml::activeLabelEx($model,'username',array('class'=>'span3')); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	<div style="margin-top: 10px"></div>
	<div class="row-new">
		<?php echo CHtml::activeLabelEx($model,'password',array('class'=>'span3')); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>

	<div class="row-new rememberMe">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?> | 
		<?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
	</div>

	<div class="row-new submit">
		<div class="span1">
		<?php echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-warning btn-large')); ?>
		</div>
		<div class="span2">
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl, array('class'=>'btn btn-warning btn-large')); ?>
		</div>
	</div>
	<div class="clear"></div>
<hr>
<?php $this->endWidget(); ?>
</div><!-- form -->


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>