<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');
$response = new Response();
$parameters = json_decode( $_POST['Parameters'] );
try {
    $database=new dbBase();
    if ( $database->is_valid() ){
        $verif = $database->prepare( 'SELECT * FROM `forum`'  );
        $validation = $verif->execute(  );
        $result = $verif->fetchall();
        $response->value=$result;
    } else {
        $response->status=false;
        $response->error="erreur fetch";
    }
} catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();
}
echo json_encode($response);
?>