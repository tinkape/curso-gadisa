<?php

$options = [
    "location" => "http://soap-service.server/index.php",
    "uri" => "http://soap-service.server/index.php",
    "trace" => true
];

//sin WSDL
//$client = new SoapClient($wsdl = null, $options);
//con WSDL
$client = new SoapClient("http://soap-service.server/wsdl.xml", $options);

print($client->saludarCliente());
print($client->saludarUsuario());

//Modificado desde editor

//Modificación desde Zend

?>
