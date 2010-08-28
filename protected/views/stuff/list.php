<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.tools.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/standalone.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/overlay-apple.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/stuff.css'); ?>

<?php
$this->breadcrumbs=array(
	'Stuffs',
);

$this->menu=array(
	array('label'=>'Create Stuff', 'url'=>array('create')),
	array('label'=>'Manage Stuff', 'url'=>array('admin')),
	array('label'=>'Logout', 'url'=>array( $this->createUrl( 'site/logout' ) ) ),
);
?>

<h1>Stuff</h1>

<div id="triggers">
<?php foreach ($stuffs as $data) : ?> 
		<div class="stuff-wrapper">
			<div class="stuff-image">
				<?php if( file_exists( MEHESZ_FILES_FOLDER . $data->image ) ) : ?>
					<a href="javascript:void(0);"><img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $data->image ); ?>" rel="#photo_<?php echo $data->id; ?>" border="0" /></a>
				<?php else: ?>
					<img src="<?php echo Yii::app()->request->baseUrl?>/images/nophoto.jpg" />
				<?php endif; ?>
			</div>
			<div class="stuff-description">
				<span class="stuff-title">
					<?php if( $data->extlink ) : ?>
						<a href="<?php echo $data->extlink; ?>" target="_blank"><?php echo $data->name; ?></a>
					<?php else: ?>
						<?php echo $data->name; ?>
					<?php endif; ?>
				</span>
				<div class="stuff-description-body"><?php echo $data->description; ?></div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<?php if( file_exists( MEHESZ_FILES_FOLDER . $data->image ) ) : ?>
		    <div class="apple_overlay" id="photo_<?php echo $data->id;?>">
			    <img src="<?php echo Yii::app()->image->createUrl( '500x350', MEHESZ_FILES_FOLDER . $data->image ); ?>" rel="#photo_<?php echo $data->id; ?>" />
    		</div>
        <?php else: ?>
            <div class="apple_overlay" id="photo_<?php echo $data->id;?>">
				<img src="<?php echo Yii::app()->request->baseUrl?>/images/nophoto.jpg" rel="#photo_<?php echo $data->id;?>"/>
            </div>
        <?php endif; ?>
<?php endforeach; ?>
</div>

<script language="javascript">
	$(function() {
		$("#triggers img[rel]").overlay({effect: 'apple'});
	});
</script>
