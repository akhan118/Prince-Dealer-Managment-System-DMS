<?php

//ini_set('display_errors', '1');
//error_reporting(E_ALL);

require 'protected/vendor/zipcodeAPI/Ziptastic.php';


$ziplookup= new Ziptastic(48126);

echo $ziplookup->city;