<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'					=> 'stuff-form',
	'enableAjaxValidation'	=> false,
	'htmlOptions' 			=> array( 'enctype'=>'multipart/form-data' ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'inblock'); ?>
		<?php echo $form->checkBox($model,'inblock'); ?>
		<?php echo $form->error($model,'inblock'); ?>
	</div>

	<div>
		
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo CHtml::activeFileField($model, 'image2'); ?>
		<?php echo $form->error($model,'image2'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'extlink'); ?>
		<?php echo $form->textField($model,'extlink',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'extlink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo 
                $form->dropDownList(
                    $model,
                    'weight', 
					range(-10,10)
                ); 
        ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delete'); ?>
		<?php echo $form->checkBox($model,'deleted'); ?>
		<?php echo $form->error($model,'deleted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
