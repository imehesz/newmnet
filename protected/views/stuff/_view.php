<div class="stuff-wrapper" style="width:350px;border: 1px solid #ddd;">
    <div class="stuff-image" style="float:left;font-weight:bolder;">
	    <img src="<?php echo Yii::app()->image->createUrl( '200x150', MEHESZ_FILES_FOLDER . $data->image ); ?>" />
    </div>
    <div class="stuff-description" style="float:left;margin-left:5px;width:100px;">
        <span style="font-weight:bolder;"><?php echo $data->name; ?></span>
        <?php echo $data->description; ?>
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
