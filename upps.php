<?php // Techsdl Inc - HTTP SERVER ERROR - WWW.TECHSDL.COM 
 require_once('http.class.php'); 
 if(isset($_GET['c']))
 { 
  $test = new HttpClass();   
  $code = trim($_GET['c']); 
  $data = $test->GetShortDetail($code);  		 
  } else {   $data = "HTTP UNKNOWN";  } 
?> 
<!DOCTYPE html> 
<head><Meta http-equip="content-type; charset=UTF-8" /> 
<title><?php echo $data; ?></title> 
<link rel="shortcut Icon" href="favicon.ico" type="png/x-icon" />
<style type="text/css"> 
body { background:#222; color:#fff; } a, a:link, a:active, a:hover, a:visited { color:#0ff; text-decoration: none;}
</style>
</head>
<body> 
<div style="color:#fff;" align="center"><h1><?php echo $data; ?></h1></div> 
<div align="center"><h3><a href="../">Home Page</a></h3><br/>
<b><?php echo $data;  ?> error was occurred while accessing the page you requested. you can get detailed info here <a href="http://www.google.com/search?q=<?php echo $code; ?>" target="_blank">more info</a></b></div>
</body></html> 	