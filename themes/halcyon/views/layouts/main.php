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
<a name="top"></a>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.tweet.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/sliderbox.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/sliderbox.css'); ?>
<div id="wrapper">
	<div id="top" class="clear">
		<h1>
        <div style="font-size:12px;"><?php echo Yii::app()->params['slogan']; ?></div>
        <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/">mehesz<span id="" class="" style="color:#a11;">.</span>net</a></div>
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
                <?php $this->widget( 'ext.facewidget.facewidget' ); ?>
                <?php $this->widget( 'ext.newsblockwidget' ); ?>
			</ul>
		</div>
		<div id="content" class="column-right">
            <?php echo $content;?>
		</div>
	</div>
	<div style="width:960px;text-align:center;height:13px;"><a href="#top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/top.jpg" border="0"/></a></div>
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
			<h4>Random Stuff</h4>
				<?php
					$inblocks = Stuff::model()->findAll( 'inblock=1' );
					
					if( sizeof($inblocks) )
					{
						$stuff_arr = array();
						foreach ($inblocks as $inblock)
						{
							$stuff_arr[] = $inblock->id;
						}

						$rand_stuff_id = $stuff_arr[ rand(0,sizeof($stuff_arr)-1) ];
					}
 				?>
				<?php if( $rand_stuff_id > 0 ) : ?>
					<?php $rand_stuff = Stuff::model()->findByPk( $rand_stuff_id ); ?>
                    <div class="boxgrid slidedown">
						<img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $rand_stuff->image ); ?>" />
	                    <div class="cover boxcaption">
							<div style="max-height:110px;overflow:hidden;">
                            	<h3><a href="<?php echo $rand_stuff->extlink; ?>" target="_blank"><?php echo $rand_stuff->name;?></a></h3>
								<?php echo $rand_stuff->description; ?>
							</div>
                            <p style="float:right;margin-right:10px;"><?php echo CHtml::link( 'more stuff', $this->createUrl( 'stuff/index' ) ); ?></p>
                        </div>
					</div>
				<?php else: ?>
					didn't find stuff :/
				<?php endif; ?>
			<?php /*
			<form action="#" method="get">
				<p>
					<input type="text" id="searchquery" size="18" name="searchterm" />
					<input type="submit" id="searchbutton" value="Search" class="formbutton" />
				</p>
			</form>
			*/?>
		</div>
	</div>
	
	<div id="footer-links">
		<p>
			&copy; <?php echo date( 'Y', time() ); ?> <a href="http://mehesz.net" target="_blank">mehesz<span style='color:#f00;'>.</span>net</a>. Design by <a href="http://www.spyka.net" target="_blank">SyKa.net</a> 
		</p>
	</div>
</div>
</body>
</html>
