<?php 
//Charegement manuel de la classe zendloader()
// include 'Zend/Loader.php';
// Zend_Loader::loadClass('Zend_View');
// $view = new Zend_View();
// var_dump($view);

//Charegement automatique de la classe zendloader()
include 'zend/Loader.php';
Zend_Loader::registerAutoload();
$date = new Zend_Date();
var_dump($date); 
echo $date;








?>
