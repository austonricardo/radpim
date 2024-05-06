<?php
// I'm using a separate config file. so pull in those values 
require("config.inc.php"); 
// pull in the file with the database class 
require("lib/dao/Database.class.php"); 
require_once("lib/auth/digest.php");
require_once("lib/nusoap/nusoap.php");
$namespace = "http://[pacote].com/services";
// create a new soap server
$server = new soap_server();
// configure our WSDL
$server->configureWSDL("[pacote]");
// set our namespace
$server->wsdl->schemaTargetNamespace = $namespace;

[ParaCadaEntidade]
require("[NomeEntidade].php");
[\ParaCadaEntidade]

// Get our posted data if the service is being consumed
// otherwise leave this data blank.                
$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) 
                ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';

// pass our posted data (or nothing) to the soap service                    
$server->service($POST_DATA);                
exit();
?>