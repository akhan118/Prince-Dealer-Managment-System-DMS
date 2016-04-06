<?php
/* @var $this OrderController */
/* @var $model OrderManagment */

$this->breadcrumbs=array(
	'Order Managments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderManagment', 'url'=>array('index')),
	array('label'=>'Create OrderManagment', 'url'=>array('create')),
	array('label'=>'Update OrderManagment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderManagment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderManagment', 'url'=>array('admin')),
);
?>

<h1>View OrderManagment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'middle_name',
		'last_name',
		'company',
		'address',
		'Sale_date',
		'zip',
		'city',
		'state',
		'county',
		'county_code',
		'Driver_lic',
		'DOB',
		'miles_out',
		'miles_type',
		'Sold_amount',
		'Broker',
		'comment',
		'time_stamp',
		'vehicle_id',
	),
)); ?>
