<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/processes/response.php');
$response = new Response();
$parameters = json_decode($_POST['Parameters']);
$module=file_get_contents($parameters->module);
if ($module!=false){
    $response->value=$module;
}else{
    $response->status=false;
    $response->error="erreur insertion";
}
echo json_encode($response);
?>