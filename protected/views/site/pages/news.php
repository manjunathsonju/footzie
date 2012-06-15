<?php
$this->pageTitle=Yii::app()->name . ' - News';
$this->breadcrumbs=array(
	'News',
);
?>
<h1>News</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>


<a href="<?php echo Yii::app()->cms->createUrl('foo');?>">
test</a>

<?php $this->widget('cms.widgets.CmsBlock',array('name'=>'bar')) ?>