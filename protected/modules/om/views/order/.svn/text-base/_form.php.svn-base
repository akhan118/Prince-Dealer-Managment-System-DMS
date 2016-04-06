<?php
/* @var $this OrderController */
/* @var $model_order OrderManagment */
/* @var $form CActiveForm */
?>

<div class="form">


    
    
    
      <?php
        $form = $this->beginWidget(
                'bootstrap.widgets.TbActiveForm', array(
            'id' => 'order-managment-form',
            'type' => 'vertical',
        ));
        ?>
    

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model_order); ?>

         <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => " Buyer Information ",
                    // 'htmlOptions'=>array('class'=>'akclass'),
            )); ?>
        
        <div class="well">
                    <div class="span6">

		<?php echo $form->labelEx($model_order,'first_name'); ?>
		<?php echo $form->textField($model_order,'first_name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model_order,'first_name'); ?>

		<?php echo $form->labelEx($model_order,'middle_name'); ?>
		<?php echo $form->textField($model_order,'middle_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_order,'middle_name'); ?>

		<?php echo $form->labelEx($model_order,'last_name'); ?>
		<?php echo $form->textField($model_order,'last_name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model_order,'last_name'); ?>

		<?php echo $form->labelEx($model_order,'company'); ?>
		<?php echo $form->textField($model_order,'company',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model_order,'company'); ?>

		<?php echo $form->labelEx($model_order,'address'); ?>
		<?php echo $form->textField($model_order,'address',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model_order,'address'); ?>

		<?php echo $form->labelEx($model_order,'Sale_date'); ?>
		<?php echo $form->textField($model_order,'Sale_date',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'Sale_date'); ?>

                        
            
            

                        
		<?php echo $form->labelEx($model_order,'zip'); ?>
		<?php echo $form->textField($model_order,'zip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model_order,'zip'); ?>

		<?php echo $form->labelEx($model_order,'city'); ?>
		<?php echo $form->textField($model_order,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'city'); ?>

		<?php echo $form->labelEx($model_order,'state'); ?>
		<?php echo $form->textField($model_order,'state',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'state'); ?>

                                            </div>

		<?php echo $form->labelEx($model_order,'county'); ?>
		<?php echo $form->textField($model_order,'county',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'county'); ?>

		<?php echo $form->labelEx($model_order,'county_code'); ?>
		<?php echo $form->textField($model_order,'county_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'county_code'); ?>

		<?php echo $form->labelEx($model_order,'Driver_lic'); ?>
		<?php echo $form->textField($model_order,'Driver_lic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model_order,'Driver_lic'); ?>

		<?php echo $form->labelEx($model_order,'DOB'); ?>
		<?php echo $form->textField($model_order,'DOB',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model_order,'DOB'); ?>

		<?php echo $form->labelEx($model_order,'miles_out'); ?>
		<?php echo $form->textField($model_order,'miles_out',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_order,'miles_out'); ?>

                        
		<?php echo $form->labelEx($model_order,'miles_type'); ?>
		<?php echo $form->textField($model_order,'miles_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_order,'miles_type'); ?>

		<?php echo $form->labelEx($model_order,'Sold_amount'); ?>
		<?php echo $form->textField($model_order,'Sold_amount',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_order,'Sold_amount'); ?>

		<?php echo $form->labelEx($model_order,'Broker'); ?>
		<?php echo $form->textField($model_order,'Broker',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_order,'Broker'); ?>

		<?php echo $form->labelEx($model_order,'comment'); ?>
		<?php echo $form->textField($model_order,'comment',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model_order,'comment'); ?>

	

	     <div class="form-actions">
                <?php
                $this->widget(
                        'bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => 'Submit')
                );
                ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
            </div>
        </div>
<?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->