<?php
$configMain = new Zend_Config_Ini($confPath . '/config.ini', 'dev');

try {
    $db = Zend_Db::factory($configMain->database);
    $db->getConnection();
}

$configSession = new Zend_Config_Ini($confPath . '/session.ini','dev');
Zend_Session::setOptions($configSession->toArray());