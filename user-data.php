<?php

$log = fopen("/Users/Mike/Documents/code/PHP/logs.txt", "r");
$browsers = Array('msie','chrome','safari','firefox','opera');
$version = $ua_matches[1];
$browser = "";

if ($log) {
	while (($line = fgets($log)) !== false) {
		preg_match_all("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/", $line, $ip_match); 
		preg_match_all("/(\d{2}\/\w{3}\/\d{4}:\d{2}:\d{2}:\d{2})/", $line, $datetime_match);
		$ua_matches = get_browser();
		//preg_match_all("/(?:version\/|(?:msie|chrome|safari|firefox|opera) )([\d.]+)/i", strtolower($line), $ua_matches);
		/*foreach($browsers as $b)
		{
			if (stripos($useragent, $b) !== false)
			{
				$browser = ucfirst($b);
				break;
			}
		}
		print_r($ip_match[0]);
		print_r($datetime_match[0]);*/
		echo $agent->browser;
		echo $agent->version;
	} 
}	else {
	echo "err";
}


?>