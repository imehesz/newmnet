<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feed-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo 
                $form->dropDownList(
                    $model,
                    'weight', 
                    array( 
                        -10 => -10,
                        -9  => -9,
                        -8  => -8,
                        -7  => -7,
                        -6  => -6,
                        -5  => -5,
                        -4  => -4,
                        -3  => -3,
                        -2  => -2,
                        -1  => -1,
                        0   => 0,
                        1   => 1,
                        2   => 2,
                        3   => 3,
                        4   => 4,
                        5   => 5,
                        6   => 6,
                        7   => 7,
                        8   => 8,
                        9   => 9,
                        10  => 10
                    ) 
                ); 
        ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted'); ?>
		<?php echo $form->checkBox($model,'deleted'); ?>
		<?php echo $form->error($model,'deleted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
