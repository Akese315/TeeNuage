<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');

class SQL_request
{

    private $db = new dbBase();

function checkID()
{



}

function Select($sql_request, $exec_params)
{

    $select =  $db->prepare("SELECT".$sql_request);
    $select->execute();
    $resultat = $verifId->fetch();
    if($resultat == false)
    {

        return $sql;

    }
    else
    {

      return $resultat_ID;      

    }
    

}

    function Insert($sql)
    {
        try
        {
            $prepare = $db->prepare("INSERT".$sql);
            $prepare = $db->execute();
            if ($prepare == false)
                {

                    return $sql;

                    
                }
                else
                {

                    return "insertion effectuée";

                }
        }
        catch(Exception $e)
        {

            return $e->getMessage();

        }
    }
    function Update($sql)
    {


        $update =  $database->prepare("UPDATE".$sql);
        $update->execute();

    }

}