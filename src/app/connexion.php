<?php
 function connect($config){
 try{
 $db = new PDO('mysql:host='.$config['server'].';dbname='.$config['database_name'],$config['login'],
$config['password']);
 }
 catch(Exception $e){
 $db = NULL;
 }
 return $db;
 }
?>
