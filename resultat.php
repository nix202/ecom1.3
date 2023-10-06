<?php
require_once("function.php");
var_dump($_POST);

if($_POST){
    $Name=$_POST['Name'];
    if (empty($Name)){
        echo"</br> pas de Nom";
    }else{
        echo "</br>Mon Nom est: ".$Name;
    }
    }
 //la validation 
 $nameLengthIsValid=nameLengthIsValid($_POST['Name']);
 echo'</br>';
 var_dump($nameLengthIsValid);
 if (!$nameLengthIsValid['isValid']){
    
 }
 $saltName= addSalt($_POST['Name']);
 var_dump($saltName);
 $encodeName = encodeName(($saltName));
 echo'</br>';
 echo $encodeName;
?>
<a href="./index.php">retour</a>