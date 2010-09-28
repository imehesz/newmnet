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
		<h3>Agile Development</h3> 
 
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/GoAgile.jpg" alt="Flying screens" style="float:left;margin:0 30px 20px 0" width="150px" /> 
 
		<p style="font-weight:bold"> 
			Agile software development is a group of software development methodologies based on iterative and incremental development, where requirements and solutions evolve through collaboration between self-organizing, cross-functional teams.
		</p> 
 
		<p> 
			<a href="http://en.wikipedia.org/wiki/Agile_software_development" target="_blank">Click here</a> for more info on agile development.
		</p>

	</div> 
 
	<!-- second slide --> 
	<div> 
		<h3>Yii - a PHP Development Framework</h3> 
 
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/yii-logo.png" alt="Yii framework" title="Yii framework" style="float:left;margin:0 30px 20px 0" width="150px" /> 
 
		<p style="font-weight:bold"> 
Yii is a high-performance component-based PHP framework best for developing large-scale Web applications.
		</p> 
 
		<p> 
Yii comes with a full stack of features, including MVC, DAO/ActiveRecord, I18N/L10N, caching, jQuery-based AJAX support, authentication and role-based access control, scaffolding, input validation, widgets, events, theming, Web services, and so on.
		</p>
		<p>
			<a href="http://yiiframework.com" target="_blank">Click here</a> for more info on Yii Framework.
		</p>

	</div> 

	<!-- third slide --> 
	<div> 
		<h3>Drupal - Content Management System</h3> 
 
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/drupalicon.png" alt="Drupal" title="Drupal" style="float:left;margin:0 30px 20px 0" width="150px" /> 
 
		<p style="font-weight:bold"> 
Drupal is a free and open source content management system (CMS) written in PHP and distributed under the GNU General Public License.
		</p> 
 
		<p> 
			It is used as a back-end system for at least 1% of all websites worldwide ranging from personal blogs to larger corporate and political sites including <a href="http://whitehouse.gov" target="_blank">whitehouse.gov</a> and <a href="http://data.gov.uk" target="_blank">data.gov.uk</a>. It is also used for knowledge management and business collaboration.
		</p>
		<p>
			<a href="http://drupal.org" target="_blank">Click here</a> for more info on Drupal.
		</p>

	</div> 
 
</div> 
 
<!-- the tabs --> 
<div class="slidetabs"> 
	<a href="#"></a> 
	<a href="#"></a> 
	<a href="#"></a> 
</div> 

<div style="width:100%;padding:30px 0 0 20px;">
    <h3>Happenings:</h3>
    <a href="http://codeworks.phparch.com/locations/orlando/" target="_blank"><img border="0" src="<?php echo Yii::app()->request->baseUrl;?>/images/cwx_logo.png" title="CodeWorks Orlando 2010" /></a>
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
