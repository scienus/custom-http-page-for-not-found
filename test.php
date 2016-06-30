<?php 
/* HTTP 404 class is PHP Script which handle all kind of http errors 
   occurred in server. 
   [ ORIGNALI coded by MS Marvi ] 
   [ Founder - Soft Skill www.techsdl.com ] 
   [ Software Engineer - Electrify Inc    ] 
   [ msmaravi@yahoo.in                    ] 
 */ 
 
 
/* set a code in $code = '' to get details about code. */ 

require_once('http.class.php'); 
$test = new HttpClass(); 
$code = 404; 
$data = $test->GetShortDetail($code);  
?> 

<html>
<head>
<title><?php echo $data; ?></title>
</head>
<body>
<p align="center"><h3 align="center"> <?php echo $data; ?> </h3></p>
</body>
</html>
