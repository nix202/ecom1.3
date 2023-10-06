
<?php
function nameLengthIsValid($NameToValid){
    $length = strlen ($NameToValid);
    $responses=[
        'isValid'=>true,
        'msg'=>''];
        if ($length<2)
{
    $responses==[
        'isValid'=>false,
        'msg'=>'short Name'];
    } elseif ($length> 10){
            $responses=[
                'isValid'=>false,
                'msg'=> 'Name is long'
            ];
        }
        return $responses;
    
   
    }
    function addSalt($nameToSalt){ //cette methode permet de proteger les donners personnelles d'un client. c'est de l'emcriptage de donner.
        $salt = 'unPeuDeSel123';
        $saltName = $salt.$nameToSalt.$salt;
        return $saltName;
    }


    function encodeName ($saltName){
        $encodeName = sha1($saltName);
        return $encodeName;
    }
?>;