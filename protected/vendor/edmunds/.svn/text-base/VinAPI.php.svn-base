<?php 

$vinNumber='3GSCL33P38S670245';

//$ob= new vinDecoder($vinNumber);
//
//echo $ob->getYear();
//
//
//echo $ob->getMake();
//echo $ob->getBodyType();
//echo $ob->getModel();
//echo $ob->outputReadableArray();
//



class vinDecoder{
	
	
private $url='http://api.edmunds.com/v1/api/toolsrepository/vindecoder?';
private $api_Key='rkhvzybqgaa3vv5592z66ptb';
private $VIN;
private $fmt='json';
public $rawURLoutput;


function __construct($vin)

{
	
	if(isset($vin))
		{

				$this->VIN=$vin;
				$URLvalues=array('vin'=>$this->VIN,
					 			 'api_key'=>$this->api_Key,
								 'fmt'=>$this->fmt);
				$QueryURl=$this->bulidqueryURL($this->url,$URLvalues);
				$this->rawURLoutput=$this->getData($QueryURl);
		
		}
		else
		{
			echo 'vin is not set';
			
			}
	
}








function getYear()
{
	
	$array=$this->rawURLoutput;
	$Year=$array['styleHolder'][0]['year'];
	return $Year;


	}
function getMake()
{
	$array=$this->rawURLoutput;
	$Make=$array['styleHolder'][0]['makeName'];
	return $Make;
	}

function getModel()
{
	$array=$this->rawURLoutput;
	$Model=$array['styleHolder'][0]['modelName'];
	return $Model;
	
	}

function getBodyType()

{
	$bodyType=$this->rawURLoutput['styleHolder'][0]['categories']['PRIMARY_BODY_TYPE'][0];
	return $bodyType;
	}



function outputReadableArray()
{
	
	print '<pre>';
	print_r($this->rawURLoutput);
	print '</pre>';
	
	}

function bulidqueryURL($url,$arrayValues)
{
	
	
	$QueryValues=$arrayValues;
	$queryString=http_build_query($QueryValues);
	$queryURL=$url.$queryString;
	return $queryURL;
	
		
}



function getData($url) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $json = curl_exec($ch);
                curl_close($ch);
				return $OutputArray=json_decode($json,true);
        }

}


?>