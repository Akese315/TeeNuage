<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');

$response = new Response();
try{
    $email = $_POST['Parameters'];
    $database=new dbBase(); 
if(!$database->is_valid())
{
	$response->status=false;
	$response->error=" Database not opened";	
}
else
{
    $stmt = $database->prepare("SELECT * FROM subscribers WHERE Email=?");
	$stmt->execute([$email]); 
    $user = $stmt->fetch();
    if($user)
    {
        $expire = date("U") + 1800;
        $selector = bin2hex(random_bytes(8));
        $token = bin2hex(random_bytes(32));

        $delete = "DELETE FROM `passwordreset` WHERE `pwdResetEmail`=?";
        $executeDelete = $database->get_handle()->prepare($delete);
        $executeDelete = $executeDelete->execute([$email]);

       

       



        $requete = "INSERT INTO `passwordreset`(`pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES (";
        $requete.= "'$email',";
        $requete.= "'$selector',";
        $requete.= "'$token',";
        $requete.= "'$token'";
        $requete.= ")";
        $execute = $database->get_handle()->prepare($requete);
        $execute = $execute->execute();


        $url = "./reset-password.php?validator=".$token;

        $to  = $email; 
        $subject = 'Réinitialisation du mot de passe du compte TeeNuage';

        $message = '
     <html>
      <body>
       <H1>Réinitialisation du mot de passe du compte TeeNuage</p>
       <p>Utilisez ce lien pour réinitialiser le mot de passe du compte '.$email.'</p>
       <a href = '.$url.'> Clickez ICI </a>
      </body>
     </html>
     ';



     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=UTF-8';
     $headers[] = "To:<'.$email.'>";
     $headers[] = 'From: TeeNuage <anniversaire@example.com>';


     $IsSend = mail($to, $subject, $message, implode("\r\n", $headers));

    if($IsSend)
    {

        $response->value = "L'Email a été envoyé avec succès !";

    }
    }
    else
    {

        $response->error = "L'Email n'a pas été envoyé";

    }
}

}
catch(Exception $error)
{

$response->error = $error;
echo json_encode($response);

}



echo json_encode($response);