


<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>



<div class="form">


    <div class="row-fluid">
        <div class="span6">



            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'vehicle-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => " Vehicle Information ",
            ));
            ?>




            <p class="alert alert-info">Fields with <span class="required">*</span> are required.</p>



            <?php
            $error = $form->errorSummary($model);

            if ($error) {
                
                var_dump($error);

                echo '<div class="alert alert-error">' . $error . '</div>';
            }
            ?>
            
            <?php echo $form->labelEx($model, 'stock_num'); ?>
            <?php echo $form->textField($model, 'stock_num') ?>
            <?php echo $form->error($model, 'stock_num'); ?>

            <?php echo $form->labelEx($model, 'purchase_date'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'purchase_date',
                'htmlOptions' => array(
                   'class'=>'input-small',
                ),
            ));
            ?>

            <?php echo $form->error($model, 'purchase_date'); ?>


            <?php echo $form->labelEx($model, 'vin'); ?>
            <?php echo $form->textField($model, 'vin', array('class' => 'input-medium')); ?>
            <?php echo $form->error($model, 'vin'); ?>



            

            <?php echo $form->labelEx($model, 'year'); ?>
            <?php echo $form->textField($model, 'year', array('class' => 'input-mini')); ?>
            <?php echo $form->error($model, 'year'); ?>

            <?php echo $form->labelEx($model, 'make'); ?>
            <?php echo $form->textField($model, 'make', array('size' => 60, 'maxlength' => 150)); ?>
            <?php echo $form->error($model, 'make'); ?>

            <?php echo $form->labelEx($model, 'model'); ?>
            <?php echo $form->textField($model, 'model', array('size' => 60, 'maxlength' => 150)); ?>
            <?php echo $form->error($model, 'model'); ?>

            <?php echo $form->labelEx($model, 'body_style'); ?>
            <?php echo $form->textField($model, 'body_style', array('size' => 60, 'maxlength' => 150)); ?>
            <?php echo $form->error($model, 'body_style'); ?>

            <?php echo $form->labelEx($model, 'color'); ?>
            <?php echo $form->textField($model, 'color', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'color'); ?>


                       <div class="controls-row">
                
                
                
             <?php echo $form->labelEx($model, 'miles'); ?>
            <?php echo $form->textField($model, 'miles', array('class'=>'span4')); ?>
            <?php echo $form->error($model, 'miles'); ?>
            

<?php echo CHtml::dropDownList('listname', array('yellow'=>'value','red'=>'test'), 
              array('M' => 'Male', 'F' => 'Female'),
        array('empty' => '(Select a gender)'));?>

            <?php echo $form->textField($model, 'miles_type', array('class'=>'span5')); ?>
            <?php echo $form->error($model, 'miles_type'); ?>

</div>
      
            
            <?php echo $form->labelEx($model, 'cost'); ?>
            <?php echo $form->textField($model, 'cost', array('size' => 12, 'maxlength' => 12)); ?>
            <?php echo $form->error($model, 'cost'); ?>

            <?php echo $form->labelEx($model, 'asking_price'); ?>
            <?php echo $form->textField($model, 'asking_price', array('size' => 12, 'maxlength' => 12)); ?>
            <?php echo $form->error($model, 'asking_price'); ?>

            <?php echo $form->labelEx($model, 'title_num'); ?>
            <?php echo $form->textField($model, 'title_num'); ?>
            <?php echo $form->error($model, 'title_num'); ?>

            <?php echo $form->labelEx($model, 'title_type'); ?>
            <?php echo $form->textField($model, 'title_type', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'title_type'); ?>

            <?php echo $form->labelEx($model, 'title_origin'); ?>
            <?php echo $form->textField($model, 'title_origin', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'title_origin'); ?>

            <?php echo $form->labelEx($model, 'cat_fee'); ?>
            <?php echo $form->textField($model, 'cat_fee'); ?>
            <?php echo $form->error($model, 'cat_fee'); ?>
            
            
            



            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>




            <?php $this->endWidget(); ?>


            
            
            
                      

            

        </div> 
<!--        first span ends-->






        <div class="span6">

            <?
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => "Bought From",
            ));
            ?>



            <?php echo $form->labelEx($model, 'cat_fee'); ?>
            <?php echo $form->textField($model, 'cat_fee'); ?>
            <?php echo $form->error($model, 'cat_fee'); ?>

<?php $this->endWidget(); ?>






        </div>

        <!--        fow fluid ends-->


    </div>







<?php $this->endWidget(); ?>
</div><!-- form -->