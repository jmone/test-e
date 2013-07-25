<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'live-message-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'from_uid'); ?>
		<?php echo $form->textField($model,'from_uid'); ?>
		<?php echo $form->error($model,'from_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_uid'); ?>
		<?php echo $form->textField($model,'to_uid'); ?>
		<?php echo $form->error($model,'to_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline'); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->