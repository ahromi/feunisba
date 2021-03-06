<?php
//anti brute force attack
define('MM_BRUTE_FILE', FCPATH.'common/library/brute/brute.txt');
define('MM_BRUTE_WINDOW', 1*60);
define('MM_BRUTE_ATTEMPTS', 1000);

class Services {
	//call with no parameters to get a true/false response. If true, do not process login.
	//call with parameter set to true to register a new failed attempt for current user and return a true/false response.
	public static function bruteCheck($failed_attempt = false) {
		$deny_login = false;
		if(file_exists(MM_BRUTE_FILE)){
		
		}
		if(!file_exists(MM_BRUTE_FILE)) touch(MM_BRUTE_FILE);
		$cache = unserialize(Services::fileToString(MM_BRUTE_FILE));
		if(!$cache) $cache = array();
		
		if($failed_attempt) {  //register the new failed attempt and timestamp
		  if(!isset($cache[getenv('HTTP_X_FORWARDED_FOR')])) {
		$cache[getenv('HTTP_X_FORWARDED_FOR')] = array();
		  }
		  $cache[getenv('HTTP_X_FORWARDED_FOR')][] = time();
		  if(count($cache[getenv('HTTP_X_FORWARDED_FOR')]) > MM_BRUTE_ATTEMPTS) array_shift($cache[getenv('HTTP_X_FORWARDED_FOR')]);
		}
		
		//get the number of failed attempts in the last 15 minutes
		if(!isset($cache[getenv('HTTP_X_FORWARDED_FOR')])) {
		  $deny_login = false;
		} else {
		  $attempts = $cache[getenv('HTTP_X_FORWARDED_FOR')];
		  if(count($attempts) < MM_BRUTE_ATTEMPTS) {
			  $deny_login = false;
		  } else {
		if($attempts[0] + MM_BRUTE_WINDOW > time()) $deny_login = true;
		else $deny_login = false;
		  }
		}
		
		//cleanup the cache so it doesn't get too large over time
		foreach($cache as $ip=>$attempts) {
		  if($attempts) {
			  if($attempts[count($attempts)-1] + MM_BRUTE_WINDOW < time()) {
			unset($cache[$ip]);
		}
		  }
		}
		
		Services::stringToFile(MM_BRUTE_FILE, serialize($cache));
		
		return $deny_login;
	}
	
	public static function fileToString($filename) {
		return file_get_contents($filename);
	}
	
	public static function stringToFile($filename, $data) {
		$file = fopen ($filename, "w");
		fwrite($file, $data);
		fclose ($file);
		return true;
	}
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function get_brow($agent)
{
	if(preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
	  elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
	  elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
	  elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
	  elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
	  elseif(preg_match('/Safari/i',$agent)) $br = 'Safari'; 
	  else $br = 'Unknown';
	 return $br;
}

function get_os($userAgent) {

	$oses = array (
		'iPhone' => '(iPhone)',
		'Windows 3.11' => 'Win16',
		'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)', 
		'Windows 98' => '(Windows 98)|(Win98)',
		'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
		'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
		'Windows 2003' => '(Windows NT 5.2)',
		'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
		'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
		'Windows 8' => '(Windows NT 6.2)|(Windows 8)',
		'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
		'Windows ME' => 'Windows ME',
		'Open BSD'=>'OpenBSD',
		'Sun OS'=>'SunOS',
		'Linux'=>'(Linux)|(X11)',
		'Safari' => '(Safari)',
		'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
		'QNX'=>'QNX',
		'BeOS'=>'BeOS',
		'OS/2'=>'OS/2',
		'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
	);

	foreach($oses as $os=>$pattern){ 
		if(preg_match("/".$pattern."/i", $userAgent)) { 
			return $os; 
		}
	}
	return 'Unknown'; 
}

function fil($s) {
	$s	= htmlentities($s);	
	//$s	= strip_tags($s);
    //$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
    //$s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
	return $s;
}
?>
