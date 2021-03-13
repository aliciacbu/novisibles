<?php 
require 'config/config.php';
require 'core/Autoload.php';
try{ 
	$app = new Bootstrap(); 
} 
catch (Exception $e){
	echo $e->getMessage();
	exit();
} 