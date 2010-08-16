<?php /*
<div style="background-color:#fff;text-align:center;">
    <div style="float:left;width:50%;">
        <p>
            <a href="http://yiiframework.com" target="_blank"><img src="<?php echo Yii::app()->request->baseurl; ?>/images/yiilogo.jpg" /></a>
        </p>
    </div>
    <div style="float:left;width:50%;">
        <p>
            <a href="http://drupal.org" target="_blank"><img src="<?php echo Yii::app()->request->baseurl; ?>/images/drupal-logo.png" /></a>
        </p>
    </div>
    <div style="clear:both;"></div>
</div>
*/ ?>
 
<!-- include the Tools --> 
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.tools.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/tabs-slideshow.css'); ?>
 
<!-- container for the slides --> 
<div class="images"> 
 
	<!-- first slide --> 
	<div> 
		<h3>First pane</h3> 
 
		<img src="http://static.flowplayer.org/img/title/screens.png" alt="Flying screens" style="float:left;margin:0 30px 20px 0" /> 
 
		<p style="font-weight:bold"> 
			Aenean nec imperdiet ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
		</p> 
 
		<p> 
			Suspendisse potenti. Sed elementum risus eleifend massa vestibulum consectetur. Duis massa augue, aliquam eget fringilla vel, aliquam vitae arcu. Nam sed magna mi. Praesent odio neque, dapibus sit amet suscipit at, tempus sed nibh. Aliquam sagittis ligula in ligula faucibus cursus. Quisque vulputate pellentesque facilisis.
		</p>

        <a href="">blaaaah</a>
 
	</div> 
 
	<!-- second slide --> 
	<div> 
		<h3>Second pane</h3> 
 
 
		<img src="http://static.flowplayer.org/img/title/eye192.png" alt="Flying screens" style="float:left;margin:0 30px 20px 0" /> 
 
		<p style="font-weight:bold"> 
			Consectetur adipiscing elit. Praesent bibendum eros ac nulla. Integer vel lacus ac neque viverra.
		</p> 
 
		<p> 
			Vivamus euismod euismod sagittis. Etiam cursus neque non lectus mattis cursus et a libero. Vivamus condimentum hendrerit metus, a sollicitudin magna vulputate eu. Donec sed tincidunt lectus. Donec tellus lectus, fermentum sit amet porta non, rhoncus ac mi. Quisque placerat auctor justo, a egestas urna tincidunt eleifend.
		</p> 
	</div> 
 
	<!-- third slide --> 
	<div> 
		<h3>Third pane</h3> 
 
		<p style="font-weight:bold"> 
			Non lectus lacinia egestas. Nulla hendrerit, felis quis elementum viverra, purus felis egestas magna.
		</p> 
 
		<p> 
			Aenean elit lorem, pretium vitae dictum in, fermentum consequat dolor. Proin consectetur sollicitudin tellus, non elementum turpis pharetra non. Sed quis tellus quam.
		</p> 
	</div> 
 
</div> 
 
<!-- the tabs --> 
<div class="slidetabs"> 
	<a href="#"></a> 
	<a href="#"></a> 
	<a href="#"></a> 
</div> 
 
<script language="JavaScript"> 
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(function() {
 
$(".slidetabs").tabs(".images > div", {
 
	// enable "cross-fading" effect
	effect: 'fade',
	fadeOutSpeed: "slow",
 
	// start from the beginning after the last tab
	rotate: true
 
// use the slideshow plugin. It accepts its own configuration
}).slideshow();
$(".slidetabs").data("slideshow").play();
});
</script> 
