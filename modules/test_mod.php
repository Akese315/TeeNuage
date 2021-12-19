<?php
$bdd = new PDO("mysql:host=localhost;dbname=forum", "root", "");
$hello='{"A":0,"B":"C"}';
$var=json_decode($hello);
var_dump($var);
echo $var->A;
echo $var->B;
?>