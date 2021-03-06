<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Vehicle', 'url'=>array('index')),
	//array('label'=>'Create Vehicle', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehicle-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Select Vehicles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_searchV',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehicle-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'vin',
		'stock_num',
		'year',
		'make',
                'model',
                'body_style',
                
		/*
		'model',
		'body_style',
		'color',
		'miles',
		'miles_type',
		'cost',
		'asking_price',
		'title_num',
		'title_type',
		'title_origin',
		'cat_fee',
		*/
               
                array('header'=>'Price',
                    'name'=>'cost'),
            
               
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                    
                         'buttons'=>array
                            (
                               'view'=>array(
            'url'=>'Yii::app()->createUrl("om/order/Checkout", array("id"=>$data->id))',                                   
                               )
                             
                            ),
                    
                    
                    
                    
                    
                    
                    
		),
	),
)); ?>
