<?php 
/* HTTP 404 class is PHP Script which handle all kind of http errors 
   occurred in server. 
   [ ORIGNALI coded by MS Marvi ] 
   [ Founder - Soft Skill www.techsdl.com ] 
   [ Software Engineer - Electrify Inc    ] 
   [ msmaravi@yahoo.in                    ] 
 */ 

 Class HttpClass 
 { 
 var $code; 
 var $err_data;
 var $ret_data;  
// function to get error code description based on code 
 function HttpClass()
 {
  $arr_data = array(
 "100" =>	"Processing Continue", 
 "400"	=>	"Bad server Request",
 "401"	=>	"Unauthorized access",
 "402"	=>	"Payment Required",
 "403"	=>	"Access Forbidden",
 "404"	=>	"File Not Found", 
 "405"	=>	"Method Not Allowed", 
 "406"	=>	"Not Acceptable", 
 "407"	=>	"Authentication Required", 
 "408"	=>	"Request Time-out", 
 "409"	=>	"Access Conflict"
  );  
  // Flip array to reverse array data 
  $flip_arr = array_flip($arr_data);
  $this->Database = $arr_data; 
  $this->Flipbase = $flip_arr; 
 } 
 
function GetShortDetail($code) 
 { 
 // check whether key is set or not 
 if (isset($code ))
 { 
    if(array_key_exists($code,$this->Database)) 
     { 
      $ret_data = array_search($code,$this->Flipbase);  
	 } 
     else 
    { 
     $ret_data = "Unknown Error occurred"; 
    } 	 
 } 
  else 
 { 
  $ret_data = "Error code is empty"; 
 } 

 return $ret_data; 
}  
  // function to get description of HTTP Error code
 function GetDescription($code)
 { 
 // in production 
 } 
}  
 
?>  