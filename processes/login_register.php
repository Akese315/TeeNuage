<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');
$response = new Response();
$parameters = json_decode($_POST['Parameters']);
$database=new dbBase();
//var_dump($parameters);
$message= array();
$message['status'] = true;
if(!$database->is_valid()){
	$response->status=false;
	$response->error=" Database not opened";	
}
else{
 try
 {
	$stmt = $database->prepare("SELECT * FROM subscribers WHERE Email=?");
	$stmt->execute([$parameters->email_register]); 
	$user = $stmt->fetch();
	if ($user) {
		$response->status=false;
		$response->email_already_used="email déjà utilisé";
	}
	else{
		$insertion = "INSERT INTO `subscribers`(`Nom`, `Prenom`, `Pseudo`, `Email`, `Age`, `MDP`) VALUES (";
		$insertion .="'$parameters->nom_register',";
		$insertion .="'$parameters->prenom_register',";
		$insertion .="'$parameters->pseudo_register',";
		$insertion .="'$parameters->email_register',";	
		$insertion .="'$parameters->age_register',";
		$insertion .="'$parameters->mdp_register'";
		$insertion .=")" ;
		$execute = $database->get_handle()->query($insertion);
		$random_id = mt_rand(100000000,999999999);
		$UpdateCurrendID = $database->prepare("UPDATE `subscribers` SET `Session_ID`=$random_id WHERE Email=?");
		$UpdateCurrendID->execute([$parameters->email_register]);
	
		if (!$execute)//regarde si l'insertion a bien été faite
			{
				$response->status=false;
				$response->error="L'enregistrement n'a pas été effectué:   ";	
			}
		else{
			$stmt = $database->get_handle()->prepare("SELECT * FROM subscribers WHERE Email=?");
			$stmt->execute([$parameters->email_register]); 
			$user = $stmt->fetch();
			if ($user) {
				$response->value= array('email'=>$user['Email'],'user_id'=>$user['ID'],'pseudo'=>$user['Pseudo'],'age'=>$user['Age'],'nom'=>$user['Nom'],'prenom'=>$user['Prenom'],'Session_ID'=>$random_id);
			}	
		}
	}
 }
 catch(Exception $error)
 {
	$response->value = $error;
	echo json_encode($response);
 }

}
echo json_encode($response);	
?>