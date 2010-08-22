<div class="stuff-wrapper" style="min-height:200px;max-weight:200px;overflow:hidden;width:330px;border: 1px solid #ddd;float:left;margin:0px 0px 5px 5px;">
    <div class="stuff-image" style="float:left;font-weight:bolder;min-height:150px;min-width:200px;">
		<?php if( $data->image ) : ?>
	    	<img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $data->image ); ?>" rel="#photo_<?php echo $data->id; ?>" />
		<?php else: ?>
			<img src="<?php echo Yii::app()->request->baseUrl?>/images/nophoto.jpg" />
		<?php endif; ?>
    </div>
    <div class="stuff-description" style="float:right;margin:5px 5px 0px 0px;width:120px;">
        <span style="font-weight:bolder;">
			<?php if( $data->extlink ) : ?>
				<a href="<?php echo $data->extlink; ?>"><?php echo $data->name; ?></a>
			<?php else: ?>
				<?php echo $data->name; ?>
			<?php endif; ?>
		</span>
        <div style="font-size:10px;margin-top:5px;"><?php echo $data->description; ?></div>
    </div>
    <div style="clear:both;"></div>
</div>
<div class="apple-overlay" id="photo_<?php echo $data->id;?>">
aaaaaaaaaaaaaaaaaaa
</div>
