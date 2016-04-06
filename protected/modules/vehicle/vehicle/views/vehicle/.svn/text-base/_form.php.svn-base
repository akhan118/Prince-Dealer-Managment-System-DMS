<div class="form">
    <div class="row-fluid">

        <?php
        $form = $this->beginWidget(
                'bootstrap.widgets.TbActiveForm', array(
            'id' => 'vehicle-form',
            'type' => 'vertical',
        ));
        ?>
        <div class="span6">   
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => " Vehicle Information ",
                    // 'htmlOptions'=>array('class'=>'akclass'),
            ));
            ?>
            <div class="well">
                <p class="alert alert-info">Fields with <span class="required">*</span> are required.</p>
                <?php echo $form->errorSummary($model); ?>
                <?php echo $form->labelEx($model, 'stock_num'); ?>
                <?php echo $form->textField($model, 'stock_num') ?>
                <?php echo $form->error($model, 'stock_num'); ?>
                <?php
                echo $form->datepickerRow(
                        $model, 'purchase_date', array(
                    'options' => array('language' => 'en'),
                    'hint' => '',
                    'options' => array('format' => 'yyyy-mm-dd'),
                    'prepend' => '<i class="icon-calendar"></i>', 'class' => 'span6'
                ));
                ?>
                <?php echo $form->labelEx($model, 'vin'); ?>
                <?php echo $form->textField($model, 'vin', array('onblur' => '{check_vin();} ', 'min' => '5')); ?>
                <?php echo $form->error($model, 'vin'); ?>
                <?php echo $form->labelEx($model, 'year'); ?>
                <?php echo $form->textField($model, 'year', array('class' => 'input-year')); ?>
                <?php echo $form->error($model, 'year'); ?>
                <?php echo $form->labelEx($model, 'make'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'make',
                    'name' => 'make',
                    'options' => array('minLength' => '1'),
                    'source' => CController::createUrl('autocompletemake'),
                ));
                ?>
                <?php echo $form->error($model, 'make'); ?> 
                <?php echo $form->labelEx($model, 'model'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'model',
                    'name' => 'model',
                    'options' => array('minLength' => '1'),
                    'source' => CController::createUrl('AutoCompleteModel'),
                ));
                ?>           
                <?php echo $form->error($model, 'model'); ?>
                <?php echo $form->labelEx($model, 'body_style'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'body_style',
                    'name' => 'body_style',
                    'options' => array('minLenght' => '1'),
                    'source' => CController::createUrl('AutoCompleteBody'),
                ));
                ?>
                <?php echo $form->error($model, 'body_style'); ?>
                <?php echo $form->labelEx($model, 'color'); ?>
                <?php echo $form->textField($model, 'color', array('size' => 60, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'color'); ?>
                <?php echo $form->labelEx($model, 'miles'); ?>
                <?php echo $form->textField($model, 'miles', array('class' => 'span4')); ?>
                <?php echo $form->error($model, 'miles'); ?>
                <?php echo $form->dropDownList($model, 'miles_type', $model->Millage_type(), array('empty' => 'Select Milliage Type')); ?>
                <?php echo $form->error($model, 'miles_type'); ?>
                <?php echo $form->textFieldRow($model, 'cost', array('prepend' => '$', 'class' => 'span9')); ?>
                <?php echo $form->textFieldRow($model, 'asking_price', array('prepend' => '$', 'class' => 'span9')); ?>
                <?php echo $form->error($model, 'asking_price'); ?>
                <?php echo $form->labelEx($model, 'title_num'); ?>
                <?php echo $form->textField($model, 'title_num', array('class' => 'span4')); ?>
                <?php echo $form->error($model, 'title_num'); ?>
                <?php echo $form->dropDownList($model, 'title_type', $model->title_type(), array('empty' => 'Select Title Type')); ?>
                <?php echo $form->error($model, 'title_type'); ?>
                <?php echo $form->labelEx($model, 'title_origin'); ?>
                <?php echo $form->dropDownList($model, 'title_origin', $model->states(), array('empty' => 'Select A State')); ?>
                <?php echo $form->error($model, 'title_origin'); ?>
                <?php echo $form->labelEx($model, 'cat_fee'); ?>
                <?php echo $form->textField($model, 'cat_fee'); ?>
                <?php echo $form->error($model, 'cat_fee'); ?>
            </div>
            <?php $this->endWidget(); /// End Vehicle Information Portlet ?>
        </div> <!--  span6-->
        <div class="span6">
            <?
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => "Bought From",
                    // 'htmlOptions'=>array('class'=>'akclass'),
            ));
            echo $form->errorSummary($purchaseModel);
            ?>
            <div class="well">
                <?
                echo $form->textFieldRow($purchaseModel, 'last_name_company');
                ?>
                <?php echo $form->labelEx($purchaseModel, 'first_name'); ?>
                <?php echo $form->textField($purchaseModel, 'first_name'); ?>
                <?php echo $form->error($purchaseModel, 'first_name'); ?>

                <?php echo $form->labelEx($purchaseModel, 'middle_name'); ?>
                <?php echo $form->textField($purchaseModel, 'middle_name', array('size' => 50, 'maxlength' => 50)); ?>
                <?php echo $form->error($purchaseModel, 'middle_name'); ?>

                <?php echo $form->labelEx($purchaseModel, 'address'); ?>
                <?php echo $form->textField($purchaseModel, 'address', array('size' => 60, 'maxlength' => 150)); ?>
                <?php echo $form->error($purchaseModel, 'address'); ?>

                <?php echo $form->labelEx($purchaseModel, 'zip'); ?>
                <?php echo $form->textField($purchaseModel, 'zip', array('onblur' => '{city_state_Lookup();} ', 'min' => '5')); ?>
                <?php echo $form->error($purchaseModel, 'zip'); ?>

                <?php echo $form->labelEx($purchaseModel, 'city'); ?>
                <?php echo $form->textField($purchaseModel, 'city', array('size' => 60, 'maxlength' => 70)); ?>
                <?php echo $form->error($purchaseModel, 'city'); ?>

                <?php echo $form->labelEx($purchaseModel, 'state'); ?>
                <?php echo $form->textField($purchaseModel, 'state', array('size' => 60, 'maxlength' => 70)); ?>
                <?php echo $form->error($purchaseModel, 'state'); ?>

                <?php echo $form->labelEx($purchaseModel, 'broker'); ?>
                <?php echo $form->textField($purchaseModel, 'broker', array('size' => 60, 'maxlength' => 100)); ?>
                <?php echo $form->error($purchaseModel, 'broker'); ?>
                <?php
                echo $form->textAreaRow(
                        $purchaseModel, 'comments', array('class' => 'span7', 'rows' => 5)
                );
                ?>
            </div>
            <?php $this->endWidget(); ?>
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
    </div><!-fluid ends-->
</div>  <!-- Class From End -->
<?php $this->endWidget(); ?>



<script type="text/javascript">
    function city_state_Lookup()
    {
<?php
echo CHtml::ajax(array(
    'url' => CController::createUrl('CityStateLookup'),
    'data' => array('zip' => 'js:$(\'#Purchase_zip\').val()',),
    'type' => 'post',
    'dataType' => 'json',
    'success' => "function(data)
                         {
                      $('#Purchase_city').val(data.city);
                      $('#Purchase_state').val(data.state);}"
));
?>
    }

    function check_vin()
    {
<?php
echo CHtml::ajax(array(
    'url' => CController::createUrl('vin'),
    'data' => array('vin' => 'js:$(\'#Vehicle_vin\').val()',),
    'type' => 'post',
    'dataType' => 'json',
    'success' => "function(data)
                         {
                      $('#make').val(data.make);
                      $('#model').val(data.model);
                      $('#Vehicle_year').val(data.year);
                      $('#body_style').val(data.body);}"
));
?>
    }
</script>



