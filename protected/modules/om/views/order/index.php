<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Managments',
);

$this->menu=array(
    	array('label'=>'Create Order', 'url'=>array('vehicles')),

	array('label'=>'Create OrderManagment', 'url'=>array('create')),
	array('label'=>'Manage OrderManagment', 'url'=>array('admin')),
);
?>

  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-pencil'></i> Vehicle sales",
		));
		
	?>
  		<div class="stacked-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
<h1>Order Managments</h1>

<?php // $this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 

$gridColumns=array(
    
    'id'=>'test',
);

$this->widget('bootstrap.widgets.TbGridView', array(
'id' => 'name-grid',
'dataProvider' => $model->search(),
//'filter' => $model,
'type' => 'striped',
'columns' => array(
    
    //'customer'=>'id',
    'last_name',
    
     array(
        
        'value'=>'$data->id',
         'header'=>'yellow',
        
    ),    
    
  
    
    
   // 'name3',
 
//   array(
//        'header' => 'custom',
//        'type'=>'raw',
//         'value' => '($data->field1 > 10) ? "<a><span class=\"icon-gift\"></span></a>" : "<a><span class=\"icon-camera\"></span></a>"',
//    ),

),
     
    
    
    ));



?>
