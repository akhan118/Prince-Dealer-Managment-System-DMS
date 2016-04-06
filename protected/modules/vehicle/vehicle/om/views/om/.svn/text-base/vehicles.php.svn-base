<?php
/* @var $this OmController */
/* @var $model OrderManagment */

$this->breadcrumbs=array(
	'Order Managments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrderManagment', 'url'=>array('index')),
	array('label'=>'Create OrderManagment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#order-managment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Order Managments</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="search-form" style="display:none">

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-managment-grid',
	'dataProvider'=>$filter->search(),
	'filter'=>$filter,
	'columns'=>array(
		'id',
		'make',
		'color',
		'model',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
		),
	),
)); ?>
