<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vin'); ?>
		<?php echo $form->textField($model,'vin',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_date'); ?>
		<?php echo $form->textField($model,'purchase_date'); ?>
		<?php echo $form->error($model,'purchase_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_num'); ?>
		<?php echo $form->textField($model,'stock_num'); ?>
		<?php echo $form->error($model,'stock_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'make'); ?>
		<?php echo $form->textField($model,'make',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'make'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body_style'); ?>
		<?php echo $form->textField($model,'body_style',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'body_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miles'); ?>
		<?php echo $form->textField($model,'miles'); ?>
		<?php echo $form->error($model,'miles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miles_type'); ?>
		<?php echo $form->textField($model,'miles_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'miles_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asking_price'); ?>
		<?php echo $form->textField($model,'asking_price',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'asking_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_num'); ?>
		<?php echo $form->textField($model,'title_num'); ?>
		<?php echo $form->error($model,'title_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_type'); ?>
		<?php echo $form->textField($model,'title_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_origin'); ?>
		<?php echo $form->textField($model,'title_origin',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_fee'); ?>
		<?php echo $form->textField($model,'cat_fee'); ?>
		<?php echo $form->error($model,'cat_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_id'); ?>
		<?php echo $form->textField($model,'purchase_id'); ?>
		<?php echo $form->error($model,'purchase_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_managment_id'); ?>
		<?php echo $form->textField($model,'order_managment_id'); ?>
		<?php echo $form->error($model,'order_managment_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->