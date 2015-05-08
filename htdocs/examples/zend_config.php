<?php
//affichage du texte en noir et encodage utf8
header('Content-type:text/plain; charset=utf-8');

//utilisation de Zend_Config
include 'Zend/Config.php';

//Création d'un nouvel objet Zend_Config
$config =  new Zend_Config(include 'zend_config_php.php');

// Utilisation de Zend_Config
echo 'Database : ' . $config->database->name . "\n";
echo 'Hostname : ' . $config->database->host . "\n";
echo 'Username : ' . $config->database->user . "\n";
echo 'Password : ' . $config->database->pass . "\n";