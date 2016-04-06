<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



//$url='https://api.edmunds.com/api/vehicle/v2/models?fmt=json&api_key=rkhvzybqgaa3vv5592z66ptb';





//get_body_style();


function get_body_style(){
    
    
    
    
    $sql='SELECT v_make.make, 
	v_model.model, 
	v_year.`year`
FROM v_make INNER JOIN v_model ON v_make.id = v_model.make_id
	 INNER JOIN v_year ON v_model.id = v_year.model_id';
    
    
    
    $con=mysqli_connect("localhost","root","root","test");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 
  mysql_select_db('test');
  
  
  
  $query=  mysql_query($sql);
  
  
  
  if(!$query)
  {echo 
mysql_error($con);
  }

  
  while($row=  mysql_fetch_assoc($query))
{
    
       $make=$row['make'];
        $model=$row['model'];
        $year=$row['year'];
        
        
        
        $make= rawurlencode($make);
$model=  rawurlencode($model);
$year= rawurlencode($year);


$url="https://api.edmunds.com/api/vehicle/v2/$make/$model/$year/styles?fmt=json&api_key=rkhvzybqgaa3vv5592z66ptb";




 $data=getData($url);
 
 
 foreach ($data as $key => $value) {
     
     
     
     
     foreach($value as $key=> $v)
     {
     
     echo '<pre>';
     
     
     
      
   $body=$v['submodel']['body'];
   
   echo $sql = "INSERT INTO `test`.`v_body` (`id`, `body`) VALUES (NULL, '$body');";
   
   // $query=  mysql_query($sql);

//      if(!$query)
//  {echo mysql_error();
//  
//  echo 'error';
//  }
      
        echo '</pre>';
        
        
     }
 }
 
        
        
}
    




 
        
        
}

//$con=mysqli_connect("localhost","root","root","test");
//
//// Check connection
//if (mysqli_connect_errno($con))
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }
//
//
// 
//  mysql_select_db('test');
//  
//$sql = "SELECT * FROM `model`";
//
////$query=  mysql_query($sql);
//
//
//if(!$query)
//{
//    echo 'error';
//    echo mysql_error();
//    
//}
//
//
//while($row=  mysql_fetch_assoc($query))
//{
//    
//    
//    $id[]=$row['id'];
//    $name[]=$row['model'];
//    
//}
//
//
//
////print_r($id);
//  
//
//  
//  
// $data=getData($url);
//
//
//  echo '<pre>';
//      
//          print_r($data);
//      
//        echo '</pre>';
// 
// function update_year(){
//     
//     /// the ID is the model id from the database.
//     
//     
//     $data=getData($url); 
//     
//for($i=0;$i< count($data['makes']); $i++)
//{
//      $make=$data['makes'][$i];
//    
//      $models=$make['models'];
//      
//      
//      for($y=0; $y < count($models); $y++)
//      {  
//     $model[]=  array($models[$y]['name']=>$models[$y]['years']);
//         
//          
//      } 
//    
//}   
//          echo '<pre>';
//      
//         //  print_r($model);
//      
//        echo '</pre>';
//            
//        for($u=0; $u < count($model); $u++)
//        {
//               
//              echo '<pre>';
//      
//           //       print_r( array_keys( $model[$u]));
//                    
//          ($years=$model[$u]);
//                 
//foreach ($years as $key => $value) {
//     
//    foreach ($value as $key => $value) {
//          
//        $some_id=$id[$u];
//         ($year_right=$value['year']);  
//                
//          //  echo $sql = "INSERT INTO `test`.`year` (`id`, `year`, `model_id`) VALUES (NULL, '$year_right', '$some_id');";
//          ///  $Results=  mysql_query($sql);
//            echo '<br/>';      
//    }
//}
//        
//            
//        }
//        
// }
//    


function getData($url) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $json = curl_exec($ch);
                curl_close($ch);
				return $OutputArray=json_decode($json,true);
        }

?>
