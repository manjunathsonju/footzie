<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>

<?php 
Yii::app()->cms->createUrl('foo');
?>

<?php $this->widget('cms.widgets.CmsBlock',array('name'=>'bar')) ?>