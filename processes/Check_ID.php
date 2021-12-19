<?php


function checkSessId($session_id, $pseudo)
{

    $database_id = new dbBase();   
    if(!$database_id->is_valid())
    {
        $response->status=false;
        $response->error=" Database not opened";	
    }
    else
    {

        $verifId =  $database_id->prepare("SELECT `Pseudo` FROM `subscribers` WHERE `Session_ID`=?");    
        if($exeVerifID = $verifId->execute([$session_id]))
        {
            $resultatID = $verifId->fetch();
            if (strcmp($resultatID['Pseudo'],$pseudo)==0)
            {
                return true;
            }
            else
            {
                return false;
            }
        
        }
        else
        {
            return false;
        }
    }
   
}


?>