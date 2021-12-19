<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');
require_once(__ROOT__.'/processes/Check_ID.php');
$response = new Response();
$parameters = json_decode( $_POST['Parameters'] );

try {
$database = new dbBase();
    $verifId =  $database->prepare("SELECT `Pseudo` FROM `subscribers` WHERE ID=?");
    $verifId->execute([$parameters->Pseudo_ID]);
    $resultat_ID = $verifId->fetch();
    
    if(strcmp($resultat_ID['Pseudo'],$parameters->User_pseudo)==0 && checkSessId($parameters->Session_ID, $parameters->User_pseudo) == true)
    {
        
        $message_erreur='INSERT INTO `message` (`Content`, `Pseudo_ID`, `Forum_ID`)  VALUES (\''.$parameters->Message.'\','.$parameters->Pseudo_ID.','.$parameters->Forum_ID.')';
        $verif = $database->prepare( 'INSERT INTO `message` (`Content`, `Pseudo_ID`, `Forum_ID`)  VALUES (\''.$parameters->Message.'\','.$parameters->Pseudo_ID.','.$parameters->Forum_ID.')');
        if(!$verif->execute()){
            $response->status=false;
            $response->error="Message not inserted";
            $response->value=$message_erreur; 
        }
    }

    
 
} catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();

} 
echo json_encode($response);
?>