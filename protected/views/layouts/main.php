<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<style>
	body{
	margin-top: 80px;
	}
</style>
<body>
	<?php $this->widget('bootstrap.widgets.BootNavbar', array(
    'fixed'=>true,
    'brand'=> CHtml::encode(Yii::app()->name),
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=> Yii::app()->request->baseUrl, 'active'=>false),
                array('label'=>'Transfer', 'url'=>'#', 'visible'=>(!Yii::app()->user->isGuest && !Yii::app()->getModule('user')->isAdmin())),
                array('label'=>'Leagues', 'url'=>'#', 'visible'=>(!Yii::app()->user->isGuest && !Yii::app()->getModule('user')->isAdmin())),
                array('label'=>'Portfolio', 'url'=>'#', 'visible'=>(!Yii::app()->user->isGuest && !Yii::app()->getModule('user')->isAdmin())),
                array('label'=>'Review', 'url'=>'#', 'visible'=>(!Yii::app()->user->isGuest && !Yii::app()->getModule('user')->isAdmin())),
                array('label'=>'Fixtures', 'url'=>'#','visible'=>!Yii::app()->getModule('user')->isAdmin()),
                array('label'=>'News', 'url'=>Yii::app()->request->baseUrl.'/site/page/view/news'),
                array('label'=>'Rules', 'url'=>Yii::app()->request->baseUrl.'/site/page/view/rules','visible'=>!Yii::app()->getModule('user')->isAdmin()),
                array('label'=>'Users', 'url'=>'#', 'items'=>array(
                    array('label'=>'Manage Users', 'url'=>Yii::app()->request->baseUrl.'/user/admin/'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'NAV HEADER'),
                    array('label'=>'Separated link', 'url'=>'#'),
                    array('label'=>'One more separated link', 'url'=>'#'),
                ),'visible'=>Yii::app()->getModule('user')->isAdmin()),
            ),
        ),
        //'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Login', 'url'=>Yii::app()->request->baseUrl.'/user/login', 'visible'=>Yii::app()->user->isGuest),
                '---',
                array('label'=>Yii::app()->user->name, 'url'=>'#', 'items'=>array(
                    array('label'=>'Logout', 'url'=>Yii::app()->request->baseUrl.'/user/logout'),
                    array('label'=>'My Account', 'url'=>'#'),
                    array('label'=>'Change Password', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                ),'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?><!-- mainmenu -->
<div class="container" id="page">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->
<hr></hr>
	<div id="footer" align="center">
		Copyright &copy; <?php echo date('Y'); ?> Footzie.com<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->



</body>
</html>
