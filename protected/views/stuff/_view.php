<div class="stuff-wrapper" style="min-height:200px;max-weight:200px;overflow:hidden;width:330px;border: 1px solid #ddd;float:left;margin:0px 0px 5px 5px;">
    <div class="stuff-image" style="float:left;font-weight:bolder;min-height:150px;min-width:200px;background-color:#aaa;">
		<?php if( $data->image ) : ?>
	    	<img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $data->image ); ?>" />
		<?php endif; ?>
    </div>
    <div class="stuff-description" style="float:right;margin:5px 5px 0px 0px;width:120px;">
        <span style="font-weight:bolder;"><?php echo $data->name; ?></span>
        <div style="font-size:10px;margin-top:5px;">asjjhds sdjsd jsdhjsdhjsjjhsdjhsdhjsdhjjhsdhjsd hj<?php echo $data->description; ?></div>
    </div>
    <div style="clear:both;"></div>
</div>
<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted')); ?>:</b>
	<?php echo CHtml::encode($data->deleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extlink')); ?>:</b>
	<?php echo CHtml::encode($data->extlink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inblock')); ?>:</b>
	<?php echo CHtml::encode($data->inblock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />


</div>
*/ ?>
