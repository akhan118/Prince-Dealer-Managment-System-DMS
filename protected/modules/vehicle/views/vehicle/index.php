<?php
/* @var $this VehicleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicles',
);

$this->menu=array(
	array('label'=>'Create Vehicle', 'url'=>array('create')),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<h1>Vehicles</h1>

<?php 
        $this->widget(
            'chartjs.widgets.ChBars', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'labels' => array("January","February","March","April","May","June"),
                'datasets' => array(
                    array(
                        "fillColor" => "#ff00ff",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "data" => array(10, 20, 30, 40, 50, 60)
                    )       
                ),
                'options' => array()
            )
        ); 
    ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
