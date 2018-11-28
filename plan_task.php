<?php


set_time_limit(0);


$url = 'http://caigou.yibainetwork.com/v1/alibaba/get-order-info';

echo '<pre/>';

while(true){
	
	$res = file_get_contents($url);
	
	
	print_r($res);
	// exit;
	
	
}

echo  'success';

