<?php

// Affichage en mode texte (pour la lisibilité de l’exemple)
header('Content-type: text/plain; charset=utf-8');
// Utilisation de Zend_Config_Xml
include 'Zend/Config/Xml.php';
// Création d’un objet contenant les directives de dev
$configFile = dirname(__FILE__) . '/zend_config_xml.xml';
$config = new Zend_Config_Xml($configFile, 'dev');
// Utilisation de Zend_Config_Xml
echo 'Database : ' . $config->database->name . "\n";
echo 'Hostname : ' . $config->database->host . "\n";
echo 'Username : ' . $config->database->user . "\n";
echo 'Password : ' . $config->database->pass . "\n";

