<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mehesz.net - making the web. better.</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/form.css" />
<script language="javascript">
    $(document).ready(function(){
        var userUpdates = function()
        {
            $('#dwitter_user').fadeOut();
            $('#dwitter_user').html('');

            $("#dwitter_user").tweet({
                username: "imehesz",
                join_text: "auto",
                avatar_size: 0,
                count: 2,
                auto_join_text_default: "", 
                auto_join_text_ed: "",
                auto_join_text_ing: "",
                auto_join_text_reply: "replied to",
                auto_join_text_url: "",
                loading_text: "loading tweets..."
            });
            $('#dwitter_user').fadeIn();
        }
        userUpdates();
    });
</script>
</head>
<body>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.tweet.js'); ?>
<div id="wrapper">
	<div id="top" class="clear">
		<h1>
        <div style="font-size:12px;"><?php echo Yii::app()->params['slogan']; ?></div>
        <div><a href="<?php echo Yii::app()->request->baseUrl; ?>">mehesz<span id="" class="" style="color:#a11;">.</span>net</a></div>
        </h1>
	    <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/page', 'view' => 'home' )),
				array('label'=>'Blog', 'url'=> 'http://mehesznet.blogspot.com' ),
				array('label'=>'Stuff', 'url'=>array('/stuff/index')),
				array('label'=>'Podcast', 'url'=> 'http://yiiradiio.mehesz.net'),
				//array('label'=>'Linux', 'url'=>array('/linux/index')),
				// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'News', 'url'=>array('/site/page', 'view'=>'news')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                /*                
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                */
			),
		)); ?>
           
	</div>
	
	<div id="body" class="clear">
		<div id="sidebar" class="column-left">
			<ul>
<?php
    /*
    Yii::app()->controller->widget('application.extensions.VGGravatarWidget.VGGravatarWidget', 
        array( 'email'  => 'imehesz@gmail.com',
               'hashed' => false,
               'default' => 'http://www.mysite.com/default_gravatar_image.jpg', 
               'size' => 150,
               'rating' => 'PG', 'htmlOptions' => array( 'alt' => 'Gravatar Icon' )));
    */
?>
                <?php $this->widget( 'ext.facewidget.facewidget' ); ?>
                <?php $this->widget( 'ext.newsblockwidget' ); ?>
                <?php /*
				<li>
					<h4>Links</h4>
	
					<ul>
						<li><a href="http://www.spyka.net" title="spyka Webmaster resources">spyka webmaster</a></li>
						<li><a href="http://www.justfreetemplates.com" title="free web templates">Free web templates</a></li>
						<li><a href="http://www.spyka.net/forums" title="webmaster forums">Webmaster forums</a></li>
						<li><a href="http://www.awesomestyles.com/mybb-themes" title="mybb themes">MyBB themes</a></li>
						<li><a href="http://www.awesomestyles.com" title="free phpbb3 themes">phpBB3 styles</a></li>
					</ul>
				</li>
				
				<li>
	
					<h4>Categories</h4>
					<ul>
					  <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
					  <li><a href="#">Quisque consequat nunc a felis.</a></li>
					  <li><a href="#">Suspendisse consequat magna at.</a></li>
					  <li><a href="#">Etiam eget diam id ligula rhoncus.</a></li>
					  <li><a href="#">Sed in mauris non nibh.</a></li>
					</ul>
				</li>
				<li>
					<h4>Sponsors</h4>
	
					<ul>
	
						<li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">ThemeForest</a> - premium HTML templates, WordPress themes and PHP scripts</li>
						<li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">Web hosting</a> - 50 dollars off when you use promocode <strong>awesome50</strong></li>
						<li><a href="http://www.4templates.com/?aff=spykawg" title="4templates">4templates</a> - brilliant premium templates</li>
	
					</ul>
				</li>
                */ ?>
	
			</ul>
		</div>
		<div id="content" class="column-right">

            <?php echo $content;?>
            <?php /*
			<h2>Introduction</h2>
	
			<p>Welcome to halcyon, a free valid CSS &amp; XHTML strict web template from <a href="http://www.spyka.net" title="spyka webmaster">spyka Webmaster</a>. This template is <strong>free</strong> to use permitting a link remains back to  <a href="http://www.spyka.net" title="spyka webmaster">http://www.spyka.net</a>. Should you wish to use this template unbranded you can buy a template license from our website for 5.00 GBP, this will allow you remove all branding related to our site, for more information about this see below.</p>	
            
            <p>This template has been tested in:</p>

            <ul>
                <li>Firefox 3.5</li>
                <li>Opera 10.00</li>
                <li>IE 7 and 8</li>
                <li>Chrome</li>
            </ul>
    
            <h3>Buy unbranded</h3>

            <p>Purchasing a template license for 5.00 GBP (at time of writing around 7.40 USD) gives you the right to remove any branding including links, logos and source tags relating to spyka webmaster. Payments are processed using paypal, with which we are a verified member, via the licensing page on our website which can be accessed at <a href="http://www.spyka.net/licensing" title="template license">http://www.spyka.net/licensing</a></p>

            <h3>More free web templates</h3>
            <p>Looking for more free web templates for other projects? Check out our <a href="http://justfreetemplates.com/portfolio?user=spyka">free web template portfolio</a>. We also offer <a href="http://www.spyka.net/wordpress-themes">WordPress themes</a> and <a href="http://www.awesomestyles.com">phpBB3 styles</a>, all of which are released under Open Source or Creative Commons licenses!</p>

            <h3>Webmaster forums</h3>	
            <p>You can get help with editing and using this template, as well as design tips, tricks and advice in our <a href="http://www.spyka.net/forums" title="webmaster forums">webmaster forums</a></p>
            
	
			
			<br /><br /> */?>
		</div>
	</div>
	<div style="width:960px;text-align:center;height:23px;"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/top.jpg" border="0"/></a></div>
	<div id="footer" class="clear">
		<div class="footer-box">
			<h4>Latest Shouts</h4>
			<div id="dwitter_user"></div>
		</div>
		
		<div class="footer-box">
			<h4>Social Me</h4>
			<ul>
			  	<li>
					<a href="http://twitter.com/imehesz" target="_blank">
						<div class="float-left"><img border="0" src="<?php echo Yii::app()->request->baseUrl;?>/images/twitter_icon.png"></div>
						<div class="float-left social-label">twitter</div>
						<div style="clear:both;"></div>
					</a>
				</li>
			  	<li>
					<a href="http://www.linkedin.com/pub/imre-mehesz/8/227/89" target="_blank">
						<div class="float-left"><img border="0" src="<?php echo Yii::app()->request->baseUrl;?>/images/linkedin_icon.png"></div>
						<div class="float-left social-label">linked-in</div>
						<div style="clear:both;"></div>
					</a>
				</li>
			  	<li>
					<a href="http://github.com/imehesz" target="_blank">
						<div class="float-left"><img border="0" src="<?php echo Yii::app()->request->baseUrl;?>/images/github_icon.png"></div>
						<div class="float-left social-label">github repos</div>
						<div style="clear:both;"></div>
					</a>
				</li>
			  	<li>
					<a href="http://imehesz.mp" target="_blank">
						<div class="float-left"><img border="0" src="<?php echo Yii::app()->request->baseUrl;?>/images/chimp_icon.png"></div>
						<div class="float-left social-label">chi.mp</div>
						<div style="clear:both;"></div>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer-box">
			<h4>Others</h4>
			<ul>
				<?php 
					$extlinks = Extlink::model()->findAll( array( 'order' => 'weight' ) ); 
					if( $extlinks ):
				?>
						<?php foreach( $extlinks as $link ): ?>
							<li>
							<?php 
								echo 
									CHtml::link( 
										$link->label, 
										$link->url,
										array( 
											'title' 	=> $link->label,
											'target'	=> '_blank'
										) 
									); 
							?>
							</li>
						<?php endforeach; ?>
				<?php endif; ?>
			</ul>	
		</div>
		
		<div class="footer-box end-footer-box">
			<h4>Search our site</h4>
			<form action="#" method="get">
				<p>
					<input type="text" id="searchquery" size="18" name="searchterm" />
					<input type="submit" id="searchbutton" value="Search" class="formbutton" />
				</p>
			</form>
		</div>
	</div>
	
	<div id="footer-links">
		<p>
			&copy; <?php echo date( 'Y', time() ); ?> <a href="/">mehesz<span style='color:#f00;'>.</span>net</a>. Design by <a href="http://www.spyka.net">SyKa.net</a> 
		</p>
	</div>
</div>
</body>
</html>
