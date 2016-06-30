<?php // Techsdl Inc - HTTP SERVER ERROR - WWW.TECHSDL.COM 
// This file handle all the http errors within a single file. Please read "README.TXT" for more   
$code = ''; 
 Class HttpError 
 { 
 public $p; 
 function getDetail($p) {
	global $desc; 
	if (isset($desc )) {
		$desc = array(
			100 => 'Continue',
			101 => 'Switching Protocols',
			102 => 'Processing',

			200 => 'OK',
			201 => 'Created',
			202 => 'Accepted',
			203 => 'Non-Authoritative Information',
			204 => 'No Content',
			205 => 'Reset Content',
			206 => 'Partial Content',
			207 => 'Multi-Status',
			226 => 'IM Used',

			300 => 'Multiple Choices',
			301 => 'Moved Permanently',
			302 => 'Found',
			303 => 'See Other',
			304 => 'Not Modified',
			305 => 'Use Proxy',
			306 => 'Reserved',
			307 => 'Temporary Redirect',

			400 => 'Bad Request',
			401 => 'Unauthorized',
			402 => 'Payment Required',
			403 => 'Forbidden',
			404 => 'Not Found',
			405 => 'Method Not Allowed',
			406 => 'Not Acceptable',
			407 => 'Proxy Authentication Required',
			408 => 'Request Timeout',
			409 => 'Conflict',
			410 => 'Gone',
			411 => 'Length Required',
			412 => 'Precondition Failed',
			413 => 'Request Entity Too Large',
			414 => 'Request-URI Too Long',
			415 => 'Unsupported Media Type',
			416 => 'Requested Range Not Satisfiable',
			417 => 'Expectation Failed',
			422 => 'Not processable Entity',
			423 => 'Locked',
			424 => 'Failed Dependency',
			426 => 'Upgrade Required',

			500 => 'Internal Server Error',
			501 => 'Not Implemented',
			502 => 'Bad Gateway',
			503 => 'Service Unavailable',
			504 => 'Gateway Timeout',
			505 => 'HTTP Version Not Supported',
			506 => 'Variant Also Negotiates',
			507 => 'Insufficient Storage',
			510 => 'Not Extended'
		); 	  
	}  

 if(isset($desc) || !empty($desc)) 
 { 
 $data = implode($desc,$code); 
  return $data; 
 } 
} 
function GetData($code) 
  { 
  $desc = $this->Process($code); 
  return $desc; 
  }  
 }

 if(isset($_GET['p']) && !empty($_GET['p'])) { 
  $code = trim($_GET['p']); 
  $data = "HTTP Error $code Occurred"; 		 
  } else {   $data = "HTTP UNKNOWN ERROR";  } 
?> 
<!DOCTYPE html> 
<head><Meta http-equip="content-type; charset=UTF-8" /> 
<title>HTTP ERROR <?php echo $code; ?></title> 
<link rel="shortcut Icon" href="images/favicon.ico" type="png/x-icon" />
<style type="text/css"> 
body { background:#222 url(); color:#fff; } a, a:link, a:active, a:hover, a:visited { color:#0ff; }
</style></head><body> 
<div style="color:#fff;" align="center"><h1><?php echo $data; ?></h1></div> 
<div align="center"><h3><a href="index.php">Home Page</a></h3><br/>
You can get details about <a href="http://www.google.com/search?q=<?php echo $code; ?>" target="_blank">HTTP <?php echo $code;  ?></a> </div>
</body></html> 	