<?php $this->beginContent('//layouts/_main'); ?>

<?php
$this->beginWidget('application.extensions.rightsidebar.RightSidebar', array('title' => 'Menu', 'collapsed' => true));

$this->widget('zii.widgets.CMenu', array(
    'items' => array(
        array('label' => 'Home', 'url' => array('site/index')),
        array('label' => 'Products', 'url' => array('product/index'), 'items' => array(
            array('label' => 'New Arrivals', 'url' => array('product/new')),
            array('label' => 'Most Popular', 'url' => array('product/popular')),
        )),
    ),
));

$this->endWidget();
?>

    <div class="row-fluid">
        <div class="span1"></div>
        <div class="span2 ">
<!--        <div class="span2 offset1"> 早期的bootstrap 没有offset1 这个css类-->

            <!--Sidebar content-->
            <div class="alert alert-info span12">
                <?php $userProfile = $this->widget('user.widgets.usercenter.UserCenterProfile'); ?>
                <br/>
                <?php $userProfile->renderSidebarMenu(); ?>
            </div>

        </div>
        <div class="span8">
            <?php UserHelper::getUserPublicProfile()->renderUserTopMenus(0) ;?>
            <?php echo $content; ?>
            <!--Body content-->
        </div>

    </div>

<?php $this->endContent(); ?>