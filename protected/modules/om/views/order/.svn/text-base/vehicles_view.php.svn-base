<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('vehicles'),
     
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Vehicle', 'url'=>array('index')),
	//array('label'=>'Create Vehicle', 'url'=>array('create')),
	//array('label'=>'Update Vehicle', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Vehicle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<h1>Checkout Vehicle <?php //$model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'vin',
		'purchase_date',
		'stock_num',
		'year',
		'make',
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
		'purchase_id',
		'order_managment_id',
	),
)); ?>
    
    <?php $this->renderPartial('_form', array('model_order'=>$model_order)); ?>