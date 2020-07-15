<?php
defined('server') ? null : define("server", "zpfp07ebhm2zgmrm.chr7pe7iynqr.eu-west-1.rds.amazonaws.com");
defined('user') ? null : define ("user", "gil366gcdxlpj4aq") ;
defined('pass') ? null : define("pass","z6w2vyhrixngm9gz");
defined('database_name') ? null : define("database_name", "t1fl43q6erea0mdl") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>