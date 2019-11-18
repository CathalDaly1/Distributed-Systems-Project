<?php

$surname = $_POST["surname"];
$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["name"];
$wsdl = "http://localhost:8080/TTTWebApplication/TTTWebService?WSDL";
$trace = true;
$exceptions = true;

try {
    $proxy = new SoapClient($wsdl, array('trace' => $trace, 'exceptions' => $exceptions));
    $xml_array['username'] = $username;
    $xml_array['password'] = $password;
    $xml_array['name'] = $name;
    $xml_array['surname'] = $surname;

    $response = $proxy->register($xml_array);
    $val = (string)$response->return;
    echo $val;
} catch (Exception $e) {
    echo $e->getMessage();
}
?>