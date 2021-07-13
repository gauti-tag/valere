<?php

 
 function VerifInput($var){

        $var = trim($var);
        $var = htmlspecialchars($var);
        $var = stripcslashes($var);
       return $var;
}

function IsEmail($var){

   $var = filter_var($var,FILTER_VALIDATE_EMAIL);

return $var;


}
function IsPhone($var){

    $var = preg_match('/^[0-9]{10}$/',$var);

return  $var;

}