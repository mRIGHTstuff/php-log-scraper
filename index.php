<?php

preg_match_all("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/", $line, $ip_match); 
print_r($ip_matches[0]);

?>