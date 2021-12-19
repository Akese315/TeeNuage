<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/private/dbBase.php');
require_once(__ROOT__.'/processes/response.php');
$response = new Response();
try{
    $parameters = json_decode( $_POST['Parameters'] );
    $database = new dbBase();
    if ( $database->is_valid() ){
        //SELECT M.ID,M.Content,M.Date,S.Pseudo,M.Pseudo_ID FROM `message` M,`subscribers` S  INNER JOIN `subscribers` WHERE M.Forum_ID =71 AND M.ID > 0 AND  M.Pseudo_ID=S.ID ORDER BY `Date` 
        $select='SELECT DISTINCT M.ID,M.Content,M.Date,S.Pseudo,M.Pseudo_ID FROM `message` M,`subscribers` S  INNER JOIN `subscribers` WHERE '.
        'M.Forum_ID ='.
        $parameters->Forum_ID.
        ' AND M.ID > '.
        $parameters->Line.
        ' AND  M.Pseudo_ID=S.ID ORDER BY `Date` ';
        $result = $database->select( $select );
        $response->value=$result;
        $response->error=$select;
    } else{
            $response->status=false;
            $response->error=" Database not opened";	
    }
} catch ( Exception $e ) {
    $response->status=false;
    $response->error=$e->getMessage();
}
 echo json_encode( $response );
?>