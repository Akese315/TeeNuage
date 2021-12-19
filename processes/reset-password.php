<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');

$response = new Response();
try{
    $parameters = json_decode($_POST['Parameters']);
    $database=new dbBase(); 
    if(!$database->is_valid()){
        $response->status=false;
        $response->error=" Database not opened";	
    }
    else
        {
        $stmt = $database->prepare("SELECT `pwdResetEmail` FROM `passwordreset` WHERE pwdResetToken=?");
        $stmt->execute([$parameters->Token]); 
        $Email = $stmt->fetch();
        if ($Email == false)
            {
                $response->status=false;
                $response->error = "Token incorrect";
            }
        else
            {
            $random_id = mt_rand(100000000,999999999);
            $updatePassword =  $database->prepare("UPDATE `subscribers` SET `MDP`=?, `Session_ID`=? WHERE `Email`=?");
            $Update = $updatePassword->execute([$parameters->Password,$random_id,$Email[0]]);
            $stmt= $database->prepare("SELECT * FROM `subscribers` WHERE `Email`=?");
            $QQ = $stmt->execute([$Email[0]]);
            $user = $stmt->fetch();
            if($Update==false|| $QQ ==false)
                {
                $response->error = "Le mot de passe n'a pas été correctement modifié ! ";
                $response->status=false;
                }
            else
                {
                $response->status=true;
                $Message= "Le mot de passe a été correctement modifié !"; 

                $response->value= array('email'=>$user['Email'],'user_id'=>$user['ID'],'pseudo'=>$user['Pseudo'],'age'=>$user['Age'],'nom'=>$user['Nom'],'prenom'=>$user['Prenom'],'Session_ID'=>$random_id,'Message'=>$Message);                    
            }
            }
        }
    } 
catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();
}
 echo json_encode($response);