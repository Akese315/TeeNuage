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
else{

	$stmt = $database->prepare("SELECT * FROM subscribers WHERE Email=?");
	$stmt->execute([$parameters->email]); 
	$user = $stmt->fetch();
	if ($user) {
        if(strcmp($user['MDP'],$parameters->mdp)==0){			
			$random_id = mt_rand(100000000,999999999);
			$UpdateCurrendID = $database->prepare("UPDATE `subscribers` SET `Session_ID`=$random_id WHERE Email=?");
			$UpdateCurrendID->execute([$parameters->email]);
			$response->value= array('email'=>$user['Email'],'user_id'=>$user['ID'],'pseudo'=>$user['Pseudo'],'age'=>$user['Age'],'nom'=>$user['Nom'],'prenom'=>$user['Prenom'],'Session_ID'=>$random_id);
        }
        else {
			$response->status=false;
			$response->error="Incorrect password : ".$user['MDP']."<>".$parameters->mdp;
        }
    }
    else{
		$response->status=false;
        $response->error="utilisateur unknown";
 		}	
	}
} catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();
}
echo json_encode($response);	
?>