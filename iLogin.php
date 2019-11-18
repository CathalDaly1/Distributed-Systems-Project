<?php
//username and password get passed on via POST and used
$username = $_POST["username"];
$password = $_POST["password"];
//This is a variable that holds the name of the web service, which connects the the webservice being run on the local network
$wsdl = "http://localhost:8080/TTTWebApplication/TTTWebService?WSDL";
$trace = true;
$exceptions = true;
try {
    //This next line creates a proxy that connects the the webservice using it's name, trace and exceptions as inputs
    $proxy = new SoapClient($wsdl, array('trace' => $trace, 'exceptions' => $exceptions));
    $xml_array['username'] = $username;
    $xml_array['password'] = $password;
    $response = $proxy->checkLogin($xml_array);
    $val = (string) $response->return;
    echo $val;
}
catch (Exception $e) {
    echo $e->getMessage();
}
?>