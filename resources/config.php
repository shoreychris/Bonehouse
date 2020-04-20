<?php
$config['db_host'] = 'localhost';
$config['db_user'] = 'unn_v031587';
$config['db_pass'] = 'Hayden2006';
$config['db_name'] = 'unn_v031587';

foreach($config as $k=>$v){
	define(strtoupper($k), $v);
}

?>