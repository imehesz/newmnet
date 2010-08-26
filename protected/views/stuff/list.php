<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.tools.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/standalone.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/overlay-apple.css'); ?>

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
		<div class="stuff-wrapper" style="min-height:200px;max-weight:200px;overflow:hidden;width:330px;border: 1px solid #ddd;float:left;margin:0px 0px 5px 5px;">
			<div class="stuff-image" style="float:left;font-weight:bolder;min-height:150px;min-width:200px;">
				<?php if( file_exists( MEHESZ_FILES_FOLDER . $data->image ) ) : ?>
					<a href="javascript:void(0);"><img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $data->image ); ?>" rel="#photo_<?php echo $data->id; ?>" border="0" /></a>
				<?php else: ?>
					<img src="<?php echo Yii::app()->request->baseUrl?>/images/nophoto.jpg" />
				<?php endif; ?>
			</div>
			<div class="stuff-description" style="float:right;margin:5px 5px 0px 0px;width:120px;">
				<span style="font-weight:bolder;">
					<?php if( $data->extlink ) : ?>
						<a href="<?php echo $data->extlink; ?>" target="_blank"><?php echo $data->name; ?></a>
					<?php else: ?>
						<?php echo $data->name; ?>
					<?php endif; ?>
				</span>
				<div style="font-size:10px;margin-top:5px;"><?php echo $data->description; ?></div>
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
