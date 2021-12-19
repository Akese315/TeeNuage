<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');
require_once(__ROOT__.'/processes/Check_ID.php');
$response = new Response();
$parameters = json_decode( $_POST['Parameters'] );
try {
    $database=new dbBase();
    if ( $database->is_valid() && checkSessId($parameters->Session_ID, $parameters->Pseudo) == true){
        $verif = $database->prepare( 'SELECT * FROM `forum` WHERE `Nom`=?' );
        $validation = $verif->execute( [$parameters->Sujet]);

        if ( $verif->rowCount()>0 ){
            $response->status=false;
            $response->error="nom de forum déjà utilisé";
            } else {
            $insertion = "INSERT INTO `forum` (`Description`,  `Nom` )  VALUES('$parameters->Description', '$parameters->Sujet')";
  
            $verif = $database->prepare( $insertion );
            if ( $verif->execute()) {
                $verif = $database->prepare( 'SELECT * FROM `forum` WHERE `Nom`=?' );
                if ($verif->execute( [$parameters->Sujet])) {
                    $result = $verif->fetch();
                    $response->value=$result['ID'];
                } else {
                    $response->status=false;
                    $response->error="erreur fetch";
                }
            } else {
                $response->status=false;
                $response->error="erreur insertion";
            }
        }
    }
} catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();
}
echo json_encode($response);
?>